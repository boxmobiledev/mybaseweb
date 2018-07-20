<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Module;
use App\Page;
use App\RolePage;

class UserController extends Controller
{
   public function loginpage()
    {
        return view('admin.loginpage');
    }
   public function registerpage()
    {
        return view('admin.registerpage');
    } 
   public function userlistpage()
    {
        return view('admin.userlistpage');
    } 
    public function userformpage(Request $request,$id){
        return view('admin.userformpage');
    }


    public function rolelistpage()
    {
        $List = Role::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.rolelistpage')->with($data);
    } 
    public function roleformpage(Request $request,$id){
        $Record = Role::where('RoleID',$id)->first();
        $ModuleListData = array();
        $ModuleList = Module::all();
        foreach($ModuleList as $key=>$val){
            $ModuleListData[$key]['ModuleID'] = $val['ModuleID'];
            $ModuleListData[$key]['Module'] = $val['Module'];
            $PageList = Page::where('ModuleID', $val['ModuleID'])->get();
            foreach($PageList as $key2=>$val2){
                $ModuleListData[$key]['PageList'][$key2]['PageID'] = $val2['PageID'];
                $ModuleListData[$key]['PageList'][$key2]['Page'] = $val2['Page'];
                $RolePageRecord = RolePage::where('RoleID',$id)->where('PageID',$val2['PageID'])->first();
                $ModuleListData[$key]['PageList'][$key2]['Checked'] = "";
                if(!empty($RolePageRecord)){
                    $ModuleListData[$key]['PageList'][$key2]['Checked'] = "checked";
                }
            }
        }
        $data = array(
            'ModuleListData'=>$ModuleListData,
            'Record'=>$Record
        );
        return view('admin.roleformpage')->with($data);
    }
    public function rolesave(Request $request)
    {
        $Role = new Role;
        if(!empty($request->input('id'))){
            //Update
            $dataUpdate =array(
                'Role'=>$request->input('Role')
            );
            Role::where('RoleID', $request->input('id'))->update($dataUpdate);
            //SAVE ROLEPAGE
            if(!empty($request->input('PageList'))){
                RolePage::where('RoleID',$request->input('id'))->delete();
                foreach($request->input('PageList') as $key=>$val){
                    $RolePage = new RolePage;
                    $RolePage->RoleID = $request->input('id');
                    $RolePage->PageID = $val;
                    $RolePage->save();
                }
            }
        }else{
            //Add
            $Role->Role = $request->input('Role');
            $Role->save();
            //SAVE ROLEPAGE
            if(!empty($request->input('PageList'))){
                foreach($request->input('PageList') as $key=>$val){
                    $RolePage = new RolePage;
                    $RolePage->RoleID = $insertedId;
                    $RolePage->PageID = $val;
                    $RolePage->save();
                }
            }
        }
        return redirect('/rolelist');
    }
    public function roleremove(Request $request,$id)
    {
        $Record = Role::where('RoleID',$id);
        $Record->delete();
        return redirect('/rolelist');
    }

    public function modulelistpage()
    {
        $List = Module::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.modulelistpage')->with($data);
    } 
    public function moduleformpage(Request $request,$id){
        $Record = Module::where('ModuleID',$id)->first();
        $data = array(
            'Record'=>$Record
        );
        return view('admin.moduleformpage')->with($data);
    }
    public function modulesave(Request $request)
    {
        $Module = new Module;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'Module'=>$request->input('Module')
            );
            Module::where('ModuleID', $request->input('id'))->update($dataUpdate);
        }else{
            $Module->Module = $request->input('Module');
            $Module->save();
        }
        return redirect('/modulelist');
    }
    public function moduleremove(Request $request,$id)
    {
        $Record = Module::where('ModuleID',$id);
        $Record->delete();
        return redirect('/modulelist');
    }

    public function pagelistpage()
    {
        $ListData = array();
        $List = Page::all();
        foreach($List as $key=>$val){
            $ListData[$key]['PageID'] = $val['PageID'];
            $ListData[$key]['Page'] = $val['Page'];
            $ListData[$key]['ModuleID'] = $val['ModuleID'];
            $ModuleRecord = Module::where('ModuleID', $val['ModuleID'])->first();
            $ListData[$key]['Module'] = $ModuleRecord['Module'];
        }
        $data = array(
            'ListData'=>$ListData
        );
        return view('admin.pagelistpage')->with($data);
    }
    public function pageformpage(Request $request,$id){
        $ModuleList = Module::all();
        $Record = Page::where('PageID',$id)->first();
        $data = array(
            'ModuleList'=>$ModuleList,
            'Record'=>$Record
        );
        return view('admin.pageformpage')->with($data);
    }
    public function pagesave(Request $request)
    {
        $Page = new Page;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'Page'=>$request->input('Page'),
                'Route'=>$request->input('Route'),
                'ModuleID'=>$request->input('ModuleID')
            );
            Page::where('PageID', $request->input('id'))->update($dataUpdate);
        }else{
            $Page->Page = $request->input('Page');
            $Page->Route = $request->input('Route');
            $Page->ModuleID = $request->input('ModuleID');
            $Page->save();
        }
        return redirect('/pagelist');
    }
    public function pageremove(Request $request,$id)
    {
        $Record = Page::where('PageID',$id);
        $Record->delete();
        return redirect('/pagelist');
    }

}

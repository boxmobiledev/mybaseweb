<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;
use App\Province;
use App\Placeship;
use App\Place;
use App\Pipe;
use App\Jobtype;

class InformationController extends Controller
{
    public function toollistpage()
    {
        $List = Tool::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.toollistpage')->with($data);
    }
   public function toolformpage(Request $request,$id)
    {
        $Record = Tool::where('ToolID',$id)->first();
        $data = array(
            'Record'=>$Record
        );
        return view('admin.toolformpage')->with($data);
    }
  public function toolsave(Request $request)
    {
        $Tool = new Tool;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'Tool'=>$request->input('Tool')
            );
            Tool::where('ToolID', $request->input('id'))->update($dataUpdate);
        }else{
            $Tool->Tool = $request->input('Tool');
            $Tool->save();
        }
        return redirect('/toollist');
    }
 public function toolremove(Request $request,$id)
    {
        $Record = Tool::where('ToolID',$id);
        $Record->delete();
        return redirect('/toollist');
    }


    public function pipelistpage()
    {
        $List = Pipe::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.pipelistpage')->with($data);
    }
   public function pipeformpage(Request $request,$id)
    {
        $Record = Pipe::where('PipeID',$id)->first();
        $data = array(
            'Record'=>$Record
        );
        return view('admin.pipeformpage')->with($data);
    }
    public function pipesave(Request $request)
    {
        $Pipe = new Pipe;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'Pipe'=>$request->input('Pipe')
            );
            Pipe::where('PipeID', $request->input('id'))->update($dataUpdate);
        }else{
            $Pipe->Pipe = $request->input('Pipe');
            $Pipe->save();
        }
        return redirect('/pipelist');
    }
    public function piperemove(Request $request,$id)
    {
        $Record = Pipe::where('PipeID',$id);
        $Record->delete();
        return redirect('/pipelist');
    }


    public function jobtypelistpage()
    {
        $List = Jobtype::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.jobtypelistpage')->with($data);
    }
   public function jobtypeformpage(Request $request,$id)
    {
        $Record = Jobtype::where('JobTypeID',$id)->first();
        $data = array(
            'Record'=>$Record
        );
        return view('admin.jobtypeformpage')->with($data);
    }
    public function jobtypesave(Request $request)
    {
        $Jobtype = new Jobtype;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'JobType'=>$request->input('JobType')
            );
            Jobtype::where('JobTypeID', $request->input('id'))->update($dataUpdate);
        }else{
            $Jobtype->JobType = $request->input('JobType');
            $Jobtype->save();
        }
        return redirect('/jobtypelist');
    }
    public function jobtyperemove(Request $request,$id)
    {
        $Record = Jobtype::where('JobTypeID',$id);
        $Record->delete();
        return redirect('/jobtypelist');
    }


    public function provincelistpage()
    {
        $List = Province::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.provincelistpage')->with($data);
    }
   public function provinceformpage(Request $request,$id)
    {
        $Record = Province::where('ProvinceID',$id)->first();
        $data = array(
            'Record'=>$Record
        );
        return view('admin.provinceformpage')->with($data);
    }
    public function provincesave(Request $request)
    {
        $Province = new Province;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'Province'=>$request->input('Province')
            );
            Province::where('ProvinceID', $request->input('id'))->update($dataUpdate);
        }else{
            $Province->Province = $request->input('Province');
            $Province->save();
        }
        return redirect('/provincelist');
    }
    public function provinceremove(Request $request,$id)
    {
        $Record = Province::where('ProvinceID',$id);
        $Record->delete();
        return redirect('/provincelist');
    }


    public function placelistpage()
    {
        $List = Place::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.placelistpage')->with($data);
    }
   public function placeformpage(Request $request,$id)
    {
        $Record = Place::where('PlaceID',$id)->first();
        $data = array(
            'Record'=>$Record
        );
        return view('admin.placeformpage')->with($data);
    }
    public function placesave(Request $request)
    {
        $Place = new Place;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'Place'=>$request->input('Place')
            );
            Place::where('PlaceID', $request->input('id'))->update($dataUpdate);
        }else{
            $Place->Place = $request->input('Place');
            $Place->save();
        }
        return redirect('/placelist');
    }
    public function placeremove(Request $request,$id)
    {
        $Record = Place::where('PlaceID',$id);
        $Record->delete();
        return redirect('/placelist');
    }


    public function placeshiplistpage()
    {
        $List = Placeship::all();
        $data = array(
            'List'=>$List
        );
        return view('admin.placeshiplistpage')->with($data);
    }
    public function placeshipformpage(Request $request,$id)
    {
        $Record = Placeship::where('PlaceshipID',$id)->first();
        $data = array(
            'Record'=>$Record
        );
        return view('admin.placeshipformpage')->with($data);
    }
    public function placeshipsave(Request $request)
    {
        $Placeship = new Placeship;
        if(!empty($request->input('id'))){
            $dataUpdate =array(
                'Placeship'=>$request->input('Placeship')
            );
            Placeship::where('PlaceshipID', $request->input('id'))->update($dataUpdate);
        }else{
            $Placeship->Placeship = $request->input('Placeship');
            $Placeship->save();
        }
        return redirect('/placeshiplist');
    }
    public function placeshipremove(Request $request,$id)
    {
        $Record = Placeship::where('PlaceshipID',$id);
        $Record->delete();
        return redirect('/placeshiplist');
    }
}

@extends('admin.layout.main')
@section('content')
		<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Form</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Create</li>
                        <li class="breadcrumb-item"><a href="{{url('rolelist')}}">List</a></li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
			<div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">หน้าที่</h4>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['url' => '/rolesave']) !!}
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Role</label>
                                            <div class="col-md-9">
                                                {{ Form::text('Role', $Record['Role'] , ['class' => 'form-control' , 'placeholder' => 'Role' , 'required']) }}
                                                <small class="form-control-feedback"> กรอข้อมูลในช่อง</small> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Module</label>
                                            <div class="col-md-9">
                                                <div class="demo-checkbox">
                                                    <!--
                                                    <input type="checkbox" id="all" class="filled-in" checked="">
                                                    <label for="all">All</label><br>-->
                                                    <?php foreach($ModuleListData as $key=>$val){?>
                                                    <h4><?php echo $val['Module'];?></h4>
                                                        <?php if(!empty($val['PageList'])){foreach($val['PageList'] as $key2=>$val2){?>
                                                        <input type="checkbox" id="PageID<?php echo $key2;?>" class="filled-in" name="PageList[]" value="<?php echo $val2['PageID']?>" <?php echo $val2['Checked'];?>>
                                                        <label for="PageID<?php echo $key2;?>"><?php echo $val2['Page']?></label>
                                                        <?php }}?>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::hidden('id', $Record['RoleID']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
             </div>
@endsection
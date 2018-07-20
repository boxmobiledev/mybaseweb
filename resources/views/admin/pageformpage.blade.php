@extends('admin.layout.main')
@section('content')
		<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Form</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Create</li>
                        <li class="breadcrumb-item"><a href="{{url('pagelist')}}">List</a></li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
			<div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">หน้า</h4>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['url' => '/pagesave']) !!}
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Page</label>
                                            <div class="col-md-9">
                                                {{ Form::text('Page', $Record['Page'] , ['class' => 'form-control' , 'placeholder' => 'Page' , 'required']) }}
                                                <small class="form-control-feedback"> กรอข้อมูลในช่อง</small> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Route</label>
                                            <div class="col-md-9">
                                                {{ Form::text('Route', $Record['Route'] , ['class' => 'form-control' , 'placeholder' => 'pageurl' , 'required']) }}
                                                <small class="form-control-feedback"> กรอข้อมูลในช่อง</small> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Route</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="ModuleID" data-placeholder="Choose a Category" tabindex="1" required>
                                                         <option value="">-- กรุณาเลือก Module --</option>
                                                        <?php foreach($ModuleList as $key=>$val){?>
                                                        <option value="<?php echo $val['ModuleID'];?>"><?php echo $val['Module'];?></option>
                                                        <?php }?>
                                                </select>
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
                                    {!! Form::hidden('id', $Record['PageID']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
             </div>
@endsection
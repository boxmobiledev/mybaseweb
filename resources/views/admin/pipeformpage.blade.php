@extends('admin.layout.main')
@section('content')
		<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Form</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Create</li>
                        <li class="breadcrumb-item"><a href="{{url('pipelist')}}">List</a></li>
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
                                <h4 class="m-b-0 text-white">เพิ่มท่อ</h4>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['url' => '/pipesave']) !!}
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Pipe</label>
                                            <div class="col-md-9">
                                                {{ Form::text('Pipe', $Record['Pipe'] , ['class' => 'form-control' , 'placeholder' => 'Pipe']) }}
                                                <small class="form-control-feedback"> กรอข้อมูลในช่อง</small> </div>
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
                                    {!! Form::hidden('id', $Record['PipeID']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
             </div>
@endsection
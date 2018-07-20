@extends('admin.layout.main')
@section('content')
		<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Form</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Create 0001</li>
                        <li class="breadcrumb-item"><a href="{{url('userlist')}}">List</a></li>
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
                                <h4 class="m-b-0 text-white">เพิ่มผู้ใช้งาน <small>( ตามระดับผู้ใช้ที่เลือก )</small></h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal form-bordered" />
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select">
                                                    <option value="" />Male
                                                    <option value="" />Female
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
@endsection
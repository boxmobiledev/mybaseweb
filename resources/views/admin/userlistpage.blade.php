@extends('admin.layout.main')
@section('content')
			<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">List</li>
                        <li class="breadcrumb-item"><a href="{{url('userform/0')}}">Create</a></li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
				<!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List</h4>
                                <h6 class="card-subtitle">รายชื่อสมาชิกผู้ใช้งานเว็บไซต์</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Fullname</th>
                                                <th>Level</th>
                                                <th>Status</th>
                                                <th>Created</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs margin-vertical-10 ">
                                                        <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                                    </div>
                                                </td>
                                                <td>May 15, 2015</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                </div>
@endsection
@extends('admin.layout.main')
@section('content')
			<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">List</li>
                        <li class="breadcrumb-item"><a href="{{url('pageform/0')}}">Create</a></li>
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
                                <h6 class="card-subtitle">Page</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Module</th>
                                                <th>Page</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($ListData as $key=>$val){ ?>
                                            <tr>
                                                <td><?php echo $val['Module']; ?></td>
                                                <td><?php echo $val['Page']; ?></td>
                                                <td class="text-nowrap">
                                                    <a href="{{url('/pageform/'.$val['PageID'])}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:;" class="swal_confirm" valid="{{$val['PageID']}}" urlremove="{{url('/pageremove/'.$val['PageID'])}}" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <?php }?>
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
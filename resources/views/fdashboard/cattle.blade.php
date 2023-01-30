@extends('layouts.fd')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <!-- Content Row -->
            <h3>Cattle</h3>
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 col-xs-12 col-sm-12">
                    <div class="card mb-4" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Cattle</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                            <p class="cattle">{{ App\Farmer_reg_2::where('user_id', auth()->user()->id)->get()->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 col-xs-12 col-sm-12">
                    <div class="card mb-4" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Bulls</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                            <p class="cattle">{{ App\Farmer_reg_2::where('gender', 'male')->where('user_id', auth()->user()->id)->get()->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 col-xs-12 col-sm-12">
                    <div class="card mb-4" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Cows

                                    </div>
                                    <div></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 icon">

                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>

                            </div>
                            <p class="cattle">{{ App\Farmer_reg_2::where('gender', 'female')->where('user_id', auth()->user()->id)->get()->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 col-xs-12 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('images/pie.png') }}" alt="" class="img-fluid" style="min-width: auto">
                        </div>
                    </div>
                </div>




                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 col-xs-12 col-sm-12" style="position: relative; top: -20px">
                    <div class="card" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Pregnant Cows</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                            <p class="cattle">180</p>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 col-xs-12 col-sm-12" style="position: relative; top: -20px">
                    <div class="card" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                    Total Calves</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                            <p class="cattle">120</p>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 col-xs-12 col-sm-12" style="position: relative; top: -20px">
                    <div class="card" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                    Sick Cattle

                                    </div>
                                    <div></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 icon">

                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>

                            </div>
                            <p class="cattle">100</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <!-- Content Row -->




        <!-- /.container-fluid -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold" style="color: #086343">Latest Added User</h6>
            </div>
            {{-- export button --}}
            {{-- <div style="display: flex; justify-content:right ; padding:20px;">
                <a href="{{route('superadmin.download')}}" class="btn btn-success">Export Excel</a>
            </div> --}}
            <div  style="display: flex; justify-content:right ; padding:20px;">

                <a href="#" class=" d-sm-inline-block btn btn-sm shadow-sm text-white" style="background: #086343;"><i
                        class="fas fa-download fa-sm text-white"></i> Generate Report</a>
                        
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color: #0f6848;color: #FFFFFF">
                        <tr align="center">

                            <th>ID</th>
                            <th>Cattle Name</th>
                            <th>Cattle Color</th>
                            <th>Gender</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>

                        <tr align="center">
                            <td>hfgdhfg</td>
                            <td>hfgh</td>
                            <td>hfgh</td>
                            <td>hfgh</td>

                            <td><a href="" class="btn text-white" style="background: #086343;"><i class="fa fa-info-circle " aria-hidden="true"></i></a>

                            <a href=""  class="btn btn-danger" onclick="confirmation(event)"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                        </tr>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Main Content -->
@endsection

@extends('layouts.fd')
<style>
    .component-image{

    }
    @media only screen and (max-width: 320px) {
        .component-image{
            position: relative;
            left: 40px;
            bottom: 90px;
        }
    }
    @media only screen and (max-width: 375px) {
        .component-image{
            position: relative;
            left: 40px;
            bottom: 90px;
        }
    }
    @media only screen and (max-width: 768px) {
        .component-image{
            position: relative;
            left: 40px;
            bottom: 90px;
        }
    }
</style>
@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
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
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
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
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
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
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card" style="height: 260px; width:231px;background: #000000;border-radius: 5px; ">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1 ctext" style="">
                                        Monthly Profits</div>
                                    <p class="para">Total Profit Growth of {{ $percentage }}%</p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 ">
                                                <ul class="ul">
                                                    <li class="feed">Feed Costs</li>
                                                    <p class="sixteen">13.2%</p>
                                                    <li class="medical">Medical Costs</li>
                                                    <p class="sixteen">11.3%</p>
                                                    <li class="feed">Others Cost</li>
                                                    <p class="sixteen">18.1%</p>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">


                                                <img class="img-fluid component-image" src="{{asset('images/Component.png')}}" style="max-width:200px; position:relative; right: 40px;">




                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <!-- Content Row -->

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-8">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #086343"> Cattle Stats</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-9">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #086343">Recent Earning</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body" style="height: 350px;">
                            <div class="chart-pie pt-4 pb-2" >
                                <table class="table" >
                                <tbody class="text-dark">
                                @foreach( App\FarmerIncome::where('user_id', auth()->user()->id)->take(5)->get() as $income )
                                <tr>
                                    <th>#000{{ $loop->iteration }} {{ $income->comment }} </th>
                                    <td></td>
                                    <td></td>
                                    <td class="text-success">+৳ {{ $income->amount }}.00</td>
                                </tr>
                                @endforeach
                            </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold" style="color: #086343">Latest Added Cattles</h6>
                </div>
                {{-- export button --}}
                <!-- <div style="display: flex; justify-content:right ; padding:20px;">
                    <a href="{{route('superadmin.download')}}" class="btn btn-success">Export Excel</a>
                </div> -->
                <!-- <div  style="display: flex; justify-content:right ; padding:20px;">

                    <a href="#" class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white" style="background: #086343;"><i
                            class="fas fa-download fa-sm text-white"></i> Generate Report</a>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="background-color:#0f6848; color: #FFFFFF ">
                                <tr align="center">
                                    <th>Date</th>
                                    <th>Cattle Name</th>
                                    <th>Cattle Id</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($cattles as $cattle)
                                    <tr align="center">
                                        <td>{{ $cattle->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $cattle->cattle_name }}</td>
                                        <td>{{ $cattle->cattle_unique_id }}</td>
                                        <td>{{ $cattle->gender }}</td>
                                        <td><a href="{{ route('cattles.export') }}"><i class="fa fa-download text-dark"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

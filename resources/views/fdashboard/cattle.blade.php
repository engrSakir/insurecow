@extends('layouts.fd')
<style>
/*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap");

/*=============== BASE ===============*/

* {
    box-sizing: border-box;
    margin: 0;
}

html body {
    font-family: "Poppins", sans-serif;
    color: #082E13;
}

.hr-style {
    margin: 0;
    background: #2F673F;
}

/*=============== NAVBAR ===============*/

nav .navbar-nav li a {
    font-size: 18px;
    color: #082E13 !important;
}

nav .navbar-nav li a:hover {
    text-decoration: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px;
    text-decoration-color: #1D5C2E;
}

.navbar-light .navbar-toggler {
    border-color: #fff;
}

.navbar-toggler:focus {
    box-shadow: none;
}

.vr-style {
    color: #2F673F;
    margin-top: 14px;
    height: 30px;
}

.signout-button {
    width: 140px;
    background: #23BB86;
    color: #fff;
    font-size: 18px;
    text-align: center;
    border: none;
    border-radius: 5px;
    padding: 8px 0px;
}

/*=============== DATATABLE ===============*/

table.dataTable {
    box-shadow: rgba(79, 172, 35, 0.67) 0px 4px 8px;
    border-radius: 4px;
    border: none !important;
}

.dataTables_wrapper>div {
    margin: 25px;
}

th,
td {
    padding-left: 10px !important;
    border: none !important;
}

.thead-style {
    background-color: #23BB86;
    color: #fff;
}

table tbody tr:nth-child(2n+1) {
    background-color: #f8f7f5 !important;
}

/* Action Button */
.details-button {
    width: 100px;
    background: #23BB86;
    color: #fff;
    font-size: 16px;
    text-align: center;
    border: none;
    border-radius: 5px;
    padding: 5px 0px;
}

/* Pagination */
.dataTables_wrapper .dataTables_paginate .paginate_button.current,
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    background: none !important;
    background-color: #C7F8C9 !important;
    border: none;
    color: #082E13 !important;
}

.paginate_button.current:hover {
    background: none !important;
    background-color: #C7F8C9 !important;
    background-color: none !important;
    border: none;
    color: #082E13 !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: #082E13 !important;
    background: none !important;
    border: none;
    background-color: #C7F8C9 !important;
}

/*=============== FOOTER ===============*/

.language-footer {
    text-decoration: none;
    color: #082E13;
}

.language-footer:hover {
    color: #082E13;
    text-decoration: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px;
    text-decoration-color: #1D5C2E;
}

/*=============== Media screen for mobile devices ===============*/

@media only screen and (max-width: 600px) {

    /* Navbar */
    .signout-button {
        width: 120px;
        padding: 6px 0px;
    }
}
/*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap");

/*=============== BASE ===============*/

* {
    box-sizing: border-box;
    margin: 0;
}

html body {
    font-family: "Poppins", sans-serif;
    color: #082E13;
}

.hr-style {
    margin: 0;
    background: #2F673F;
}

.fontAwesome {
    font-family: Helvetica, 'FontAwesome', sans-serif;
}

/*=============== NAVBAR ===============*/

nav .navbar-nav li a {
    font-size: 18px;
    color: #082E13 !important;
}

nav .navbar-nav li a:hover {
    text-decoration: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px;
    text-decoration-color: #1D5C2E;
}

.navbar-light .navbar-toggler {
    border-color: #fff;
}

.navbar-toggler:focus {
    box-shadow: none;
}

.vr-style {
    color: #2F673F;
    margin-top: 14px;
    height: 30px;
}

.signout-button {
    width: 140px;
    background: #23BB86;
    color: #fff;
    font-size: 18px;
    text-align: center;
    border: none;
    border-radius: 5px;
    padding: 8px 0px;
}

/*=============== REGISTER ===============*/

/* Image Card */
.card-style {
    background-color: #EFFFF080;
    border-radius: 10px;
    border: none;
}

/* Right Card */
.right-card {
    background-color: #FDFCFC;
    border-radius: 10px;
    border: none;
    box-shadow: rgba(79, 172, 35, 0.67) 0px 4px 8px;
}

.heading-text {
    font-size: 24px;
    font-weight: 600;
}

.subheading-text {
    font-size: 20px;
    font-weight: 400;
}

.input-form {
    border-radius: 10px;
}

/* Register Button*/
.register-button {
    width: 12rem;
    background: #23BB86;
    color: #fff;
    font-size: 18px;
    text-align: center;
    border: none;
    border-radius: 50px;
    padding: 5px 0px;
    margin-bottom: 80px;
}

/*=============== FOOTER ===============*/

.language-footer {
    text-decoration: none;
    color: #082E13;
}

.language-footer:hover {
    color: #082E13;
    text-decoration: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px;
    text-decoration-color: #1D5C2E;
}

/*=============== Media screen for mobile devices ===============*/

@media only screen and (max-width: 600px) {

    /* Navbar */
    .signout-button {
        width: 120px;
        padding: 6px 0px;
    }

    .card-style {
        display: none;
    }

    .right-card {
        box-shadow: rgba(62, 135, 27, 0.25) 0px 4px 10px;
    }
}

/*=============== Media screen for tab (portrait) ===============*/

@media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation: portrait) {
    
    .card-style {
        display: none;
    }

    .right-card {
        box-shadow: rgba(62, 135, 27, 0.25) 0px 4px 10px;
    }
}08
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
                <div class="col-xl-3 col-md-6">
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
                            <p class="cattle">180</p>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6">
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
                            <p class="cattle">120</p>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6">
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
                            <p class="cattle">100</p>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6">
                    <div class="card" style="height: 260px; width:231px;background: #000000;border-radius: 5px; ">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1 ctext" style="">
                                        Monthly Profits</div>

                                    <div>
                                        <p class="para">Total Profit Growth of 16%</p>
                                        <ul>
                                        <li class="feed">Feed Costs</li>
                                        <p class="sixteen">16%</p>
                                            <li class="medical">Medical Costs</li>
                                            <p class="twenty">20%</p>
                                            <li class="Affiliate"> Affiliate</li>
                                            <p class="sixteen">12%</p>


                                        </ul>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4" style="position: relative; top: -70px">
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
                <div class="col-xl-3 col-md-6 mb-4" style="position: relative; top: -70px">
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
                <div class="col-xl-3 col-md-6 mb-4" style="position: relative; top: -70px">
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

            <div class="row">
                <div class="col-lg-12">
                <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
    <thead class="thead-style">
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Owner Image</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Farm Name</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Farmer Name</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Cattle Weight</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Thana: activate to sort column ascending">Cattle Color</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach($registeredcattles as $registeredcattle)
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $registeredcattle->id }}</td>
                <td><img src="{{ url('storage/'.$registeredcattle->cow_with_owner) }}" width="50px"></td>
                <td>{{ $registeredcattle->farmname }}</td>
                <td>{{ $registeredcattle->farmername }}</td>
                <td>{{ $registeredcattle->weight }}</td>
                <td>{{ $registeredcattle->cattle_color }}</td>
                <td>
                    <a href="{{ route('show.farmer.registered.cattle', $registeredcattle->id) }}" class="btn text-white" style="background: #086343">Details</a>    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

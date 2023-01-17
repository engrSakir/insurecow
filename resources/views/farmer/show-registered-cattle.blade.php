@extends('layouts.farmer')

@section('content')
    @push('css')
        <link rel="stylesheet" href="{{asset('/css/register_page_02.css')}}" />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap");

            * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            }

            html body {
            font-family: "Poppins", sans-serif;
            color: #082e13;
            }

            .hr-style {
            margin: 0;
            background: #2f673f;
            }

            section {
            margin-top: 2rem;
            margin-bottom: 5rem;
            }

            /* Navbar */
            nav .navbar-nav li a {
            font-size: 18px;
            color: #082e13 !important;
            }

            nav .navbar-nav li a:hover {
            text-decoration: underline;
            text-underline-offset: 5px;
            text-decoration-thickness: 2px;
            text-decoration-color: #1d5c2e;
            }

            .navbar-light .navbar-toggler {
            border-color: #fff;
            }

            .navbar-toggler:focus {
            box-shadow: none;
            }

            .vr-style {
            color: #2f673f;
            margin-top: 14px;
            height: 30px;
            }

            .signout-button {
            width: 140px;
            background: #23bb86;
            color: #fff;
            font-size: 18px;
            text-align: center;
            border: none;
            border-radius: 5px;
            padding: 8px 0px;
            }

            /* Navbar */

            /* Middle Content */
            .main-section {
            /* margin-bottom: 4rem; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 78px;
            }

            form {
            box-shadow: 0px 4px 18px rgba(79, 172, 35, 0.5);
            border-radius: 4px;
            overflow: hidden;
            }

            .card-header {
            background-color: #23bb86;
            color: #ffff;
            font-size: 22px;
            }

            .cow-details .owner,
            .cow-details .species,
            .cow-details .issue-date,
            .cow-details .pdf {
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            }

            .cow-details .pdf > div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            }

            /* Table */
            .table-style {
            border-radius: 3px;
            box-shadow: rgba(35, 187, 10, 0.4) 0px 3px 8px;
            margin: 0;
            }

            .table th {
            background-color: #23bb86;
            color: #fff;
            font-weight: 400;
            font-size: 22px;
            }

            .table td {
            font-weight: 300;
            font-size: 16px;
            }

            .table th,
            .table td {
            padding-left: 52px;
            }

            .table tbody tr:nth-child(odd) {
            background-color: #f8f7f5;
            }

            /* Table */
            /* Middle Content */

            /* Footer */
            .language-footer {
            text-decoration: none;
            color: #082e13;
            }

            .language-footer:hover {
            color: #082e13;
            text-decoration: underline;
            text-underline-offset: 5px;
            text-decoration-thickness: 2px;
            text-decoration-color: #1d5c2e;
            }

            /* Footer */

            /* Media screen for mobile devices */
            @media only screen and (max-width: 600px) {
            /* Navbar */
            .signout-button {
                width: 120px;
                padding: 6px 0px;
            }
            /* Navbar */

            /* Middle-content */
            .cow-details .pdf > div {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            /* Middle-content */
            }

        </style>
    @endpush
    <section>
      <div class="main-section">
        <div class="cow-img">
          <img src="{{ url('storage/'.$registeredcattle->cow_with_owner) }}" alt="" class="img-fluid" width="300px" />
          <p class="text-center">Cow with Owner</p>
        </div>
      </div>
      <div class="cow-details">
        <form>
          <div class="information">
            <div class="card-header row">Cow Details Information</div>

            <div style="background: #D0ECCF" class="row d-flex owner">
              <div class="col-lg-5">
                <p>Owner Name : {{ $registeredcattle->firstname }} {{ $registeredcattle->lastname }}</p>
                <p>Post : {{ $registeredcattle->post }}</p>
              </div>
              <div class="col-lg-5">
                <p>Thana : {{ $registeredcattle->thana }}</p>
                <p>Contact Number : {{ $registeredcattle->contact }}</p>
              </div>
            </div>

            <div
              style="border-bottom: 1px solid #2f673f"
              class="row d-flex species"
            >
              <div class="col-lg-5">
                <p>Cattle Species : {{ $registeredcattle->cattle_breed }}</p>
                <p>Age : {{ $registeredcattle->age }} year</p>
                <p>Gender : {{ $registeredcattle->gender }}</p>
              </div>
              <div class="col-lg-5">
                <p>Cattle Bread : {{ $registeredcattle->cattle_breed }}</p>
                <p>Weight : {{ $registeredcattle->weight }} Kg</p>
                <p>Cattle ID : {{ $registeredcattle->cattle_unique_id }}</p>
              </div>
            </div>

            <div class="row d-flex issue-date">
              <div class="col-lg-5">
                <p>Issuing Date : {{ $registeredcattle->created_at }}</p>
              </div>
              <div class="col-lg-5">
                @if($pending)
                <p>Period of Insurance : {{ $pending->insurance_period }} Years</p>
                @else
                <p>No Insurance found for this Cattle</p>
                @endif
              </div>
            </div>

            <!-- <div style="background-color: #f9f6f6" class="row d-flex pdf">
              <div>
                <div class="col-lg-3 mb-4">
                  <p>Owner NID :</p>
                  <img class="img-fluid" src="./images/pdf.png" alt="" />
                </div>
                <div class="col-lg-3 mb-4">
                  <p>Vet Certificate :</p>
                  <img class="img-fluid" src="./images/pdf.png" alt="" />
                </div>
                <div class="col-lg-3 mb-4">
                  <p>Chairman Certificate :</p>
                  <img class="img-fluid" src="./images/pdf.png" alt="" />
                </div>
              </div>
            </div> -->

            <div class="vet-support">
              <!-- <p class="ps-4">Vet Support History</p> -->
              <!-- Table -->
              <div class="table-responsive col-lg-12 table-style">
                <table class="table table-hover" id="vet-support-table">
                  <thead>
                    <tr>
                      <th scope="col">Disease</th>
                      <th scope="col">Vaccine Name</th>
                      <th scope="col">Issue Date</th>
                      <th scope="col">Next Vaccination Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($medicals)
                      @foreach($medicals as $medical)
                      <tr>
                        <td scope="row">{{ $medical->disease_name }}</td>
                        <td>{{ $medical->vaccine_name }}</td>
                        <td>{{ $medical->date }}</td>
                        <td>{{ $medical->next_vaccination_date }}</td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td>No Records Found.</td>
                      </tr>
                      @endif
                  </tbody>
                </table>
                @if(!$pending)
                  <a href="{{ route('onboard.single', $registeredcattle->id) }}" class="btn text-white text-center mb-3" style="background-color: #0f6848; margin-left: 15px; margin-bottom: 10px">Create Insurance for this cattle</a>
                @endif
              </div>
              <!-- Table -->
            </div>
          </div>
        </form>
      </div>
    </section>
@endsection

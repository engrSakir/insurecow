@extends('layouts.fd')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <h3>Cattle    <a class="btn float-right text-dark" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border-radius: 5px;">New Report</a>
                          <a href="#" class="btn float-right text-dark"><img src="{{ asset('/images/Vector.png') }}" class="img-fluid float-right"></a></h3>
            <center>
                <img src="{{ asset('storage/'.$registeredcattle->face_of_cow) }}" class="img-fluid mb-5">
            </center>
            <section>
              
              <h4 class="text-center text-white p-2" style="background: #226034">Cow Details Information</h4>
              <div class="cow-details  mt-2">
          <div class="information">
            <div class="row d-flex owner mt-2">
              <div class="col-lg-5">
                <p>Cattle Name : {{ $registeredcattle->cattle_name }}</p>
                <p>Age : {{ $registeredcattle->age }}</p>
                <p>Gender : {{ $registeredcattle->gender }}</p>
              </div>
              <div class="col-lg-5">
                <p>Cattle Breed : {{ $registeredcattle->cattle_breed }}</p>
                <p>Weight : {{ $registeredcattle->weight }}</p>
                <p>Cattle Color : {{ $registeredcattle->cattle_color }}</p>
              </div>
            </div>

            <div
              style="background: #D9D9D9; border-bottom: 1px solid #2f673f"
              class="row d-flex species p-2 rounded mb-3"
            >
              <div class="col-lg-5">
                <p>Price : {{ $registeredcattle->price }} Taka</p>
                <p>Medical Expense : {{ $expenses }} Taka</p>
                <p>Total Expense (with cattle price): {{ $registeredcattle->price + $expenses + $expensesfood }} Taka</p>
              </div>
              <div class="col-lg-5">
                <p>Feed Expense : {{ $expensesfood }} Taka</p>
                <p>Total Expense: {{ $expenses + $expensesfood }} Taka</p>  
                <p class="font-weight-bold">Profitable Selling Price : {{ $registeredcattle->price + $expenses + $expensesfood + $totalprofit }} Taka</p>
              </div>
            </div>

            <div class="row d-flex issue-date">
              <div class="col-lg-5">
                <p>Issuing Date : {{ $registeredcattle->created_at }}</p>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                Vet Certificate : <br>
                
              </div>
              <div class="col-lg-6">
                Chairman Certificate : <br>
                <img src="{{ asset('storage/' . $certificate->chairman) }}" class="img-fluid">
              </div>
            </div>  

          </div>
      </div>
    </section>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection

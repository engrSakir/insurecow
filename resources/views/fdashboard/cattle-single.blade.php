@extends('layouts.fd')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <h3>Cattle    <a data-toggle="modal" data-target="#exampleModalCenter1" class="btn float-right text-dark" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border-radius: 5px;">New Report</a>
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
                  <!-- <p class="font-weight-bold">Profitable Selling Price : {{ $registeredcattle->price + $expenses + $expensesfood + $totalprofit }} Taka</p> -->
                </div>
                <div class="col-lg-12">
                  <p class="font-weight-bold">Profit Calculator :</p>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="">Total Cattle Cost</label>
                    <input type="number" name="list" value="{{ $registeredcattle->price + $expenses + $expensesfood }}" class="form-control" readonly>
                  </div>
                  
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="">Percentage profit you want</label>
                    <input type="number" name="disc" class="form-control" placeholder="%">
                  </div>
                    </div> 
                  </div>
                  <div class="form-group">
                    <label for="">Selling Price</label>
                    <input type="number" name="sale" class="form-control" readonly style="font-weight: bold; color: red">
                  </div>
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
            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLongTitle" align="center"><center>Add New Report</center></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('report.save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- <div class="form-group">
                                    <label for="">Date:</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Amount:</label>
                                    <input type="number" name="amount" class="form-control">
                                </div> -->
                                <div class="form-group">
                                    <label for="">Cattle:</label>
                                    <select name="cattle_id" class="form-control">
                                        <option value="">SELECT CATTLE</option>
                                        @foreach($cattles as $cattle)
                                            <option value="{{ $cattle->id }}">{{ $cattle->cattle_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="">SELECT EXPENSE CATEGORY:</label>
                                    <select name="category" class="form-control">
                                        <option value="">SELECT EXPENSE CATEGORY</option>
                                        <option value="medical">MEDICAL</option>
                                        <option value="food">FOOD</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label for="">Vet Report:</label>
                                    <input type="file" name="pdf_file" class="form-control" accept="image/jpeg,image/gif,image/png,application/pdf">
                                </div>
                                <div class="form-group">
                                    <label for="">Date:</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Details:</label>
                                    <textarea name="details" row="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group float-right">
                                    <button type="button" style="color: #000000; border: 2px solid #000000" class="btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn text-white" style="background: #086343">Create Income</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection

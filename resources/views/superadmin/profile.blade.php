@extends('layouts.main')

@section('content')
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Register Company/NGO/Bank</h1>
            <form>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name">
                  </div>
                 
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" class="form-control" placeholder="Enter Personal Website Address">
                  </div>
               
                <div class="mb-3">
                    <label  class="form-label">About</label>
                    <input type="text" class="form-control" placeholder="Enter About">
                  </div>
                  <div class="form-control">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                   <input type="file">
                  </div><br>
        
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
@endsection
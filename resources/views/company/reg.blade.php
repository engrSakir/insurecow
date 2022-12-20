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
                    <label class="form-label">Company Name</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label class="form-label"></label>
                    <input type="hidden" class="form-control">
                  </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Password</label>
                  <input type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input type="text" class="form-control">
                  </div>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Company</option>
                    <option value="2">NGO</option>
                    <option value="3">Bank</option>
                    <option value="4">MFI</option>

                  </select><br><br>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
@endsection
@extends('layouts.main')

@section('content')
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Register Company/NGO/Bank</h1>
            <form action="{{url('company/store')}}" method="post">
              @csrf
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label class="form-label"></label>
                    <input type="hidden" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control">
                  </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Adress</label>
                    <input type="text" name="address" class="form-control">
                  </div>
                  <select class="form-select" name="role_1" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="p">Company</option>
                    <option value="n">NGO</option>
                    <option value="b">Bank</option>
                    <option value="m">MFI</option>

                  </select><br><br>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
@endsection
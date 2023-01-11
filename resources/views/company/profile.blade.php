@extends('layouts.company')

@section('content')
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Company Profile</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name" value="{{ Auth::user()->name }}">
                </div>

                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter Email" value="{{ Auth::user()->email }}">
                </div>
                <div class="mb-3">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control" placeholder="Enter Email" value="{{ Auth::user()->phone }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Enter Personal Website Address" value="{{ old('website') }}" required>
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input type="text"  name="address" class="form-control" placeholder="Enter About" value="{{ old('address') }}" required>
                  </div>
                <div class="mb-3">
                    <label  class="form-label">About</label>
                    <input type="text"  name="about" class="form-control" placeholder="Enter About" value="{{ old('about') }}" required>
                  </div>
                  <div class="form-control">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                   <input type="file" name="image">
                  </div><br>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
@endsection




@extends('layouts.main')

@section('content')
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Register Company/NGO/Bank</h1>
    @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
            <form action="{{route('superadmin.store')}}" method="post">
              @csrf
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Company Name" value="{{ old('name') }}" requried>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" value="{{ old('phone') }}" requried>
                  </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="{{ old('email') }}" requried>
                </div>
                <div class="mb-3" style="position: relative">
                  <label  class="form-label">Password</label>

                  <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" placeholder="Enter Password" requried>
                  <small><span style="color: black">Password Hints:</span> <span class="text-danger">(A-Z), (a-z), (0-9), (!@%#$^@&*)</span></small>
                    <i class="fas fa-eye-slash fa-eye" id="eye" ></i>

                </div>
                <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input type="text" name="adress" class="form-control" placeholder="Enter Your Address" value="{{ old('adress') }}" requried>
                  </div>
                  <div class="mb-3">
                  <select class="form-control" name="role_1" >

                    <option>Company</option>
                    <option>NGO</option>
                    <option>Bank</option>
                    <option>MFI</option>

                  </select>
                </div>
                <button type="submit" class="btn btn-primary" style="background: #086343">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
@endsection

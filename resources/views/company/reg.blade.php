@extends('layouts.company')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center"><u> Register Field Agent / Farmer</u></h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            @endif
            <form action="{{ route('company.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name"
                        value="{{ old('name') }}" required>
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label">Employee ID</label>
                    <input type="text" name="name" class="form-control">
                  </div> --}}

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone"
                        value="{{ old('phone') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                        value="{{ old('email') }}" required>
                </div>

                <div class="mb-3" style="position: relative">
                    <label class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Enter Your Password" value="{{ old('password') }}" required>
                    <i class="fas fa-eye-slash fa-eye" id="eye"></i>

                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="adress" class="form-control" placeholder="Enter Your Address"
                        value="{{ old('adress') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Employee ID</label>
                    <input type="text" name="agent_employee_id" class="form-control" placeholder="Enter Your Employee ID"
                        value="{{ old('agent_employee_id') }}" required>
                </div>
                <div class="mb-3">
                    <select class="form-control" name="role_1">

                        <option>Field Agent</option>
                        <option>Farmer</option>


                    </select>
                </div>

                <button type="submit" class="btn   text-white" style="background-color:#086343 ">Submit</button>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

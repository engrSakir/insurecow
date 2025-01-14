@extends('layouts.main')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Super Admin Edit Profile</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('profiles.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- {{method_field('put')}} --}}
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name"
                        value="{{ auth()->user()->name }}" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter Email" value="{{ auth()->user()->email }}"
                        name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Enter Personal Website Address"
                        value="{{ $profile->website }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">About</label>
                    <input type="text" name="about" class="form-control" placeholder="Enter About"
                        value="{{ $profile->about }}">
                </div>


                <img src="{{ asset('storage/' . $profile->image) }}" alt="" style="width: 200px; height: 200px">

                <div class="form-control">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    <input type="file" name="image">
                </div><br>

                <button type="submit" class="btn " style="background-color: #0f6848; color: #FFFFFF">Submit</button>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

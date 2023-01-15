@extends('layouts.farmer')
@section('content')
    <div class=" justify-content-center text-center" style="  padding: 25px;">
        <h2 style="color: #1b1e21"><u>Send Request Us</u></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-md-4">
                <h4 class="text-center mt-3"><b> Fill Your Details</b></h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('send.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="card p-5" style="background: rgba(79, 172, 35, 0.25);">
                        <div class="form-group">
                            <label for="date">Name*</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                        </div>

                        <div class="form-group">
                            <label for="disease_name">Email*</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label for="vaccine_name">Phone*</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="next_vaccination_date">Company Name*</label>
                            <input type="text" class="form-control" name="company" placeholder="Enter Company Name">
                        </div>
                        <div class="form-group pt-3">
                            <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Send A Request --></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

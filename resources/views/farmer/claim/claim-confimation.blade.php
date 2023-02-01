@extends('layouts.farmer')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-5 mb-5">
            <center>
                <img src="{{ asset('/images/congratulations.png') }}" class="img-fluid">
                <p class="mt-4">
                Your Claim Request Sent Successfully. <br>
                Our Agent Will Contact With You Soon.
                </p>
                <a href="#" class="btn text-white text-center mt-4" style="background: #086343">Back To Home</a>
            </center>
        </div>
    </div>
</div>
@endsection
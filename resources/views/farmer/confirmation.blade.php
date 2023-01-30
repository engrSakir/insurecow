@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
            <center><img src="{{ asset('/images/congratulations.png') }}" class="mt-5 mb-5 img-fluid"></center>
            <h2 class="text-center mb-5" style="font-size: 28px"><b>Your Cattle Added Successfully.</b></h2>
            <a href="{{ route('farmer.index') }}" class="btn text-white" style="background: #082E13">Complete Registration</a>
            <a href="{{ route('reg_two.index') }}" class="btn float-end" style="color: #082E13;background: #d9d9d9"><i class="fas fa-plus-circle"></i> Add Another Cattle</a>
        </div>
    </div>
</div>

@endsection

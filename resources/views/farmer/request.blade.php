@extends('layouts.farmer')
@section('content')
    <div class=" justify-content-center text-center" style="  padding: 25px;">
        <h2>Grow Your Business With InsureCow</h2>
    </div>
    <div class=" justify-content-center text-center">
        <p>One Sure way to move Up in business</p>
    </div>
    <div class=" justify-content-center text-center">
        <a href="{{route('send.create')}}" class="btn" style="background-color: #0f6848; color: #ffffff">Send Request</a>
    </div>

@endsection

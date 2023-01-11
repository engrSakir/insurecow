@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Your Cattle ‘Some’ Added Successfully.</b></h2>
            <a href="#">Complete Registration</a>
            <a href="#">Add Another Cattle</a>
        </div>
    </div>
</div>

@endsection

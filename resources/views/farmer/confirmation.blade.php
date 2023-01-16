@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
            <h2 class="text-center mt-5 mb-5"><b>Your cattle added successfully.</b></h2>
            <a href="{{ route('farmer.index') }}" class="btn text-white" style="background: #082E13">Complete Registration</a>
            <a href="{{ route('reg_two.index') }}" class="btn float-end" style="color: #082E13;background: #d9d9d9"><i class="fas fa-plus-circle"></i> Add Another Cattle</a>
        </div>
    </div>
</div>

@endsection

@extends('layouts.farmer')

@push('css')
    <link rel="stylesheet" href="{{asset('/css/fcss/homepage.css')}}" />
@endpush
@section('content')
<section class="mt-5 mb-4 p-4">
    <div>
        <p class="p-greeting">Hi, {{ Auth::user()->name }}.</p>
        <p class="p-welcome-text">Welcome to InsureCow!</p>
    </div>

    <div class="row mt-5">
        <div class="d-lg-flex d-md-flex justify-content-center">

            <!--Cow Lists-->
            <div class="col-lg-4 col-md-6 mb-4 me-lg-5 me-md-4">
                <div class="card card-style">
                    <div class="p-2 card-block-top">
                        <h4 class="card-title">View Cow Lists </h4>
                    </div>
                    <img src="{{asset('images/cow-list.png')}}" alt="Registered Cow" class="img-fluid img-card">
                    <div class="text-center p-4">

                        <a href="{{ route('farmer.registered.cattle') }}" class="btn card-button" style="background-color: #0f6848">Continue</a>

                    </div>
                </div>
            </div>

            <!--Field Agent Details-->
{{--            <div class="col-lg-4 col-md-6 mb-4">--}}
{{--                <div class="card card-style">--}}
{{--                    <div class="p-2 card-block-top">--}}
{{--                        <h4 class="card-title">Field Agent Details </h4>--}}
{{--                    </div>--}}
{{--                    <img src="{{asset('/images/field-agent.png')}}" alt="Insurance Claim" class="img-fluid  img-card">--}}
{{--                    <div class="text-center p-4">--}}

{{--                        <a href="{{ route('farmer.index') }}" class="btn card-button" style="background-color: #0f6848">Continue</a>--}}

{{--                      --}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

</section>





@endsection

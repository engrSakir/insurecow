@extends('layouts.farmer')

@push('css')
    <link rel="stylesheet" href="{{asset('/css/fcss/homepage.css')}}" />
@endpush
@section('content')
<section class="mt-3 mb-4 p-4">
    <div class="row mt-3">
        <div class="d-lg-flex d-md-flex justify-content-center">
            <!--Cow Lists-->
            @if(auth()->user()->cattles()->count() == 0)
            <div class="col-lg-7">
                <div>
                    <h1 class="p-greeting" style="font-weight: bold">Welcome Mr. {{ Auth::user()->name }} to InsureCow ! ! !</h1>
                    <p align="center">Here is some option for you.</p>
                    @if(auth()->user()->farmer_profile == null)
                        <center><a href="{{ route('farmerprofiles.index') }}" class="btn w-50 text-white text-center mt-5 mb-5" style="background-color: #0f6848">Set your profile</a></center>
                    @else
                        <center><a href="{{ route('reg_one.index') }}" class="btn w-50 text-white text-center mt-5 mb-5" style="background-color: #0f6848">Add cattle</a></center>
                    @endif
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('images/farmer.png') }}" alt="" class="img-fluid rounded homepage shadow-1p">
            </div>
            @else

            <div class="col-lg-7">
                <div>
                    <h1 class="p-greeting" style="font-weight: bold">Welcome Mr. {{ Auth::user()->name }} to InsureCow ! ! !</h1>
                    <p align="center" class="mb-5">Here is some option for you.</p>
                    <center>
                        <a href="{{ route('reg_one.index') }}" class="btn w-50 text-center mt-5 font-weight-bold" style="background-color: #ffffff; border: 1px solid #226034;color: #082E13"><strong>Add cattle</strong></a>
                        <a href="{{ route('farmer.registered.cattle') }}" class="btn w-50 text-center mt-2 font-weight-bold" style="background-color: #ffffff; border: 1px solid #226034;color: #082E13"><strong>View registered cattle</strong></a>
                        <a href="{{ route('onboard.index') }}" class="btn w-50 text-center mt-2 font-weight-bold" style="background-color: #ffffff; border: 1px solid #226034;color: #082E13"><strong>Create insurance for your cattle</strong></a>
                        <a href="{{ route('claim.index') }}" class="btn w-50 text-white text-center mt-2 mb-5 font-weight-bold" style="background-color: #0f6848">Claim Insurance</a>
                    </center>
                </div>
            </div>

            <div class="col-lg-5">
                <img src="{{ asset('images/farmer.png') }}" alt="" class="img-fluid rounded homepage shadow-1p">
            </div>

            @endif

        </div>
    </div>



</section>
@endsection

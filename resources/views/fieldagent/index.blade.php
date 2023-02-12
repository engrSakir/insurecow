@extends('layouts.fieldagent')

@section('content')
    @push('css')
        <link rel="stylesheet" href="{{asset('/css/fcss/homepage.css')}}" />
    @endpush

        <section class="mt-3 mb-4 p-4">
            <div class="row mt-3">
                <div class="d-lg-flex d-md-flex justify-content-center">
                    <!--Cow Lists-->


                        <div class="col-lg-7">
                            <div>
                                <h1 class="p-greeting" style="font-weight: bold">Welcome Mr. {{ Auth::user()->name }} to InsureCow ! ! !</h1>
                                <p align="center" class="mb-5">Here is some option for you.</p>
                                <center>
                                    <a href="{{route('fieldagent.reg')}}" class="btn w-50 text-center mt-5 font-weight-bold text-white" style="background-color: #0f6848; border: 1px solid #226034;color: #082E13"><strong>Register Farmer</strong></a>
                                    <a href="" class="btn w-50 text-center mt-2 font-weight-bold" style="background-color: #ffffff; border: 1px solid #226034;color: #082E13"><strong>Assign Task</strong></a>
                                    <a href="{{route('fieldagent.registeredFarmer')}}" class="btn w-50 text-center mt-2 font-weight-bold" style="background-color: #ffffff; border: 1px solid #226034;color: #082E13"><strong>View Registered Farmer</strong></a>
                                </center>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <img src="{{ asset('images/agent.png') }}" alt="" class="img-fluid rounded homepage">
                        </div>



                </div>
            </div>



        </section>
@endsection

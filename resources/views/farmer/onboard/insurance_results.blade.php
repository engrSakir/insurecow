@extends('layouts.farmer_onboard')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            @if( Session::has( 'nothing' ))
            <div class="alert text-white mt-5" style="background: #226034">
                {{ Session::get( 'nothing' ) }}
            </div>
            @endif
                <div class="card p-5" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border: 1px solid #000000;">
                    <a href="{{ route('onboard.index') }}" class="float-start mb-3 p-3 text-dark" style="width: 150px; background: linear-gradient(268.09deg, #C5EAD5 24.79%, #FFFFFF 99.54%);border-radius: 20px;"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                    @foreach($pakages as $pakage)
                    <div style="background: linear-gradient(101.16deg, #FFFFFF 0.38%, rgba(179, 255, 143, 0.25) 81.93%);border: 1px solid #000000;box-shadow: -2px -2px 10px rgba(0, 0, 0, 0.25), 2px 2px 10px rgba(0, 0, 0, 0.25);border-radius: 10px;" class="mb-2">
                        <center>
                        <div class="text-box ml-5" style="display: inline-block">
                        <?php
                            $image = App\Company::where('user_id', $pakage->user_id)->first();
                        ?>
                        @if($image)
                            <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid mb-3" width="200px">
                        @else
                            <img src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg" class="img-fluid mb-3" width="200px">
                        @endif

                        </div>
                        <div class="text-box" style="display: inline-block">
                            <span style="margin-left: 10px; color: #7B7B7B">Plan Name</span><br>
                            <span style="margin-left: 10px">{{$pakage->name}}</span>
                        </div>
                        <div class="text-box" style="display: inline-block">
                            <span style="margin-left: 10px; color: #7B7B7B">Insurance Period</span><br>
                            <span style="margin-left: 10px">{{$pakage->insurance_period}} Year</span>
                        </div>
                        <div class="text-box" style="display: inline-block">
                            <span style="margin-left: 10px; color: #7B7B7B">Coverage</span><br>
                            <span style="margin-left: 10px; margin-right: 10px">{{$pakage->coverage}}</span>
                        </div>
                        <div class="text-box p-5" style="display: inline-block">
                            <form action="{{ route('onboard.show', $pakage->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="cattle_id" value="{{ $data['cattle_id'] }}">
                                <input type="hidden" name="user_id" value="{{ $data['user_id'] }}">
                                <input type="hidden" name="buying_price" value="{{ $data['buying_price'] }}">
                                <input type="hidden" name="insurance_period" value="{{ $data['insurance_period'] }}">
                                <input type="hidden" name="accidental_mortality" value="{{ $data['accidental_mortality'] }}">
                                <input type="hidden" name="additionalcoverages" value="{{ $data['additionalcoverages'] }}">
                                <input type="hidden" name="company_id" value="{{ $pakage->user_id }}">
                                <button type="submit" class="btn w-100" style="background: #d9d9d9">Details</button>
                            </form>
                            <br>
                            <form action="{{ route('insurance.single.save') }}" method="POST">
                                @csrf
                                <input type="hidden" name="cattle_id" value="{{ $data['cattle_id'] }}">
                                <input type="hidden" name="user_id" value="{{ $data['user_id'] }}">
                                <input type="hidden" name="buying_price" value="{{ $data['buying_price'] }}">
                                <input type="hidden" name="insurance_period" value="{{ $data['insurance_period'] }}">
                                <input type="hidden" name="accidental_mortality" value="{{ $data['accidental_mortality'] }}">
                                <input type="hidden" name="additionalcoverages" value="{{ $data['additionalcoverages'] }}">
                                <input type="hidden" name="company_id" value="{{ $pakage->user_id }}">
                                <button type="submit" class="btn w-100 text-white" style="background: #082E13">Request Now</button>
                            </form>
                        </div>
                        </center>
                    </div>
                    @endforeach
                    @if($pakages->count() == 0)
                        <h3 class="text-center p-5 text-white rounded" style="background: #0f6848">No Insurance Companies Found</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

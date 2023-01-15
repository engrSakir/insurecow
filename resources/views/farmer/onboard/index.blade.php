@extends('layouts.farmer_onboard')
@section('content')
    <div class="container">
        <div class="row">
            <a href="#" class="float-start w-25 p-3 mt-3 text-dark" style="background: linear-gradient(268.09deg, #C5EAD5 24.79%, #FFFFFF 99.54%);border-radius: 20px;"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
            @if( Session::has( 'not' ))
            <div class="alert text-white mt-5" style="background: #226034">
                {{ Session::get( 'not' ) }}
            </div>
            @endif
            <div class="col-md-8 offset-2 mt-5">
                <div class="card p-5" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border: 1px solid #000000;">
                    <h2 class="text-center" >Select Your Cattle</h2>
                    <div class="nav nav-fill my-3">
                        <label class="nav-link step0 border ml-2 text-white">Step One</label>
                        <label class="nav-link step1 border ml-2 text-white">Step Two</label>
                        <label class="nav-link step2 border ml-2 text-white">Step Three</label>
                    </div>

                    <form action="{{ route('insurance.store') }}" method="get" class="employee-form">
                        @csrf
                        <div class="form-section">
                            <select name="cattle_id" class="form-control mb-3 text-center" required>
                                    <option value="">Select Your Cattle</option>
                                @foreach($cattle as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->cattle_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-section">
                            <label for="">What is The Buying Price of Your Cattle?</label>
                            <input min="50000" max="500000" type="number" class="form-control mb-3" name="buying_price" required>

                            <label for="">Enter Insurance Period</label>
                            <input min="1" max="5" type="number" class="form-control mt-3" name="insurance_period" required>
                        </div>
                        <div class="form-section">
                            <h3>What Coverages Do You Want For Your Cattle?</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="accidental/diseases mortality" name="accidental_mortality" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Accidental/ Diseases Mortality
                                </label>
                            </div>
                            <h3>Additional Coverages</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="floodcyclonecoverage" name="additionalcoverages[]" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Flood Cyclone Coverage
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="earthquakecoverage" name="additionalcoverages[]" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Earthquake Coverage
                                </label>
                            </div>
                        </div>
                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn float-start" style="background: #d9d9d9">&lt; Back</button>
                            <button type="button" class="next btn float-end text-white" style="background: #226034">Next &gt;</button>
                            <button type="submit" class="btn float-end text-white" style="background: #226034">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

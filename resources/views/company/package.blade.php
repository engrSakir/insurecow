@extends('layouts.company')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-lg-8 " style="margin: auto;  width: 50%;padding: 10px;">

                <h4 class="text-center mt-3"><b> Fill Your Details</b></h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('package.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="card p-5" style="background: rgba(199, 248, 201, 1)">
                        <div class="form-group">
                            <label for="date">Select Price Range: </label>

                                <select class="form-control" name="price_range" >
                                    <option value="10,000 - 50,000 BDT">10,000 - 50,000 BDT</option>
                                    <option value="50,001 - 1,00,000 BDT">50,001 - 1,00,000 BDT</option>
                                    <option value="1,00,001 - 1,50,000 BDT">1,00,001 - 1,50,000 BDT</option>
                                    <option value="1,50,001 - 2,00,000 BDT">1,50,001 - 2,00,000 BDT</option>
                                    <option value="2,00,001 - 10,00,000 BDT">2,00,001 - 10,00,000 BDT</option>



                                </select>

                        </div>

                        <div class="form-group">
                            <label for="disease_name">Select Insurance Period:</label>
                            <select class="form-control" name="insurance_period" >
                                <option value="1">1 Year</option>
                                <option value="2">2 Years</option>
                                <option value="3">3 Years</option>
                                <option value="4">4 Years</option>
                                <option value="5">5 Years</option>



                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vaccine_name">Select Coverage:</label>
                            <select class="form-control" name="coverage" >
                                <option value="Accidental/ Diseases Mortality">Accidental/ Diseases Mortality</option>
                                <option value="Flood Cyclone Coverage">Flood Cyclone Coverage</option>
                                <option value="Earthquake Coverage">Earthquake Coverage</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="next_vaccination_date">Enter Premium Amount</label>
                            <input type="text" name="premium_amount" class="form-control" placeholder="Enter Premium Amount">
                        </div>
                        <div class="form-group pt-3">
                            <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Create Package</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>



@endsection
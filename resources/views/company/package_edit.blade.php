@extends('layouts.company')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-lg-8 " style="margin: auto;  width: 50%;padding: 5px;">

                <h4 class="text-center mt-3 p-3"><b><u>Update Your Insurance Packages</u></b></h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('package.update',$package->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="card p-5" style="background: rgba(199, 248, 201, 1)">
                        <div class="form-group">
                            <label for="next_vaccination_date">Package Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Package Name" value="{{$package->name}}">
                        </div>
                        <div class="form-group">
                            <label for="date">Select Price Range: </label>

                            <select class="form-control" name="price_range" value="{{$package->price_range}}">
                                <option>10,000 - 50,000 BDT</option>
                                <option>50,001 - 1,00,000 BDT</option>
                                <option>1,00,001 - 1,50,000 BDT</option>
                                <option>1,50,001 - 2,00,000 BDT</option>
                                <option>2,00,001 - 10,00,000 BDT</option>



                            </select>

                        </div>

                        <div class="form-group">
                            <label for="disease_name">Select Insurance Period:</label>
                            <select class="form-control" name="insurance_period" value="{{$package->insurance_period}}" >
                                <option>1 Year</option>
                                <option>2 Years</option>
                                <option>3 Years</option>
                                <option>4 Years</option>
                                <option>5 Years</option>



                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vaccine_name">Select Coverage:</label>
                            <select class="form-control" name="coverage" value="{{$package->coverage}}" >
                                <option>Accidental/ Diseases Mortality</option>
                                <option>Flood Cyclone Coverage</option>
                                <option>Earthquake Coverage</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="next_vaccination_date">Enter Premium Amount</label>
                            <input type="text" name="premium_amount" class="form-control" placeholder="Enter Premium Amount" value="{{$package->premium_amount}}">
                        </div>
                        <div class="form-group">
                            <label for="next_vaccination_date">Enter Lowest Amount</label>
                            <input type="number" name="lowest" class="form-control" placeholder="Enter Lowest Amount" value="{{$package->lowest}}">
                        </div>
                        <div class="form-group">
                            <label for="next_vaccination_date">Enter Highest Amount</label>
                            <input type="number" name="highest" class="form-control" placeholder="Enter Highest Amount" value="{{$package->highest}}">
                        </div>
                        <div class="form-group pt-3">
                            <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Update Package</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>



@endsection

@extends('layouts.farmer')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <section>
    <div class="card mt-4 mb-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('farmerprofiles.update', $profile->id) }}" method="POST" enctype="multipart/form-data">

        @method('put')
        {{ csrf_field() }}
            <div class="card-block p-2 card-block-top mb-4" style="background-color: #0f6848">
                <h4 class="ms-4" style="color: #FFFFFF">Update Farmer Profile</h4>
            </div>
            <div class="card-block p-2 card-block-down"  style="background: #D7ECCB;">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row px-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputFirstName">First name :</label>
                            <input type="text" id="inputFirstName" class="form-control input-style" name="first_name" placeholder="First Name" value="{{$profile->first_name}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Last name :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="last_name" placeholder="Last Name" value="{{$profile->last_name}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Email :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Phone :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Father's Name :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="father_name" placeholder="Father's Name" value="{{$profile->father_name}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Mother's Name :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="mother_name" placeholder="Mother's Name" value="{{$profile->mother_name}}"/>
                        </div>
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Present Address :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="present_address" placeholder="Present Address" value="{{$profile->present_address}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Permanent Address :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="permanent_address" placeholder="Permanent Address" value="{{$profile->permanent_address}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Date Of Birth :</label>
                            <input type="date" id="inputLastName" class="form-control input-style" name="dob" placeholder="Date Of Birth" value="{{old('dob',$profile->dob)}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">NID/Passport/Birth Registration No.  :</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="nid" placeholder="NID/Passport/Birth Registration No."  value="{{$profile->nid}}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Source Of Income :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="source_of_income" placeholder="Source Of Income"  value="{{$profile->source_of_income}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Bank Account No :</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="bank_no" placeholder="Bank Account No"  value="{{$profile->bank_no}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Farm Address :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="farm_address" placeholder="Farm Address"  value="{{$profile->farm_address}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Zila :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="zila" placeholder="Zila"  value="{{$profile->zila}}"/>
                        </div>
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Upozila/Thana :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="thana" placeholder="Upozila/Thana"  value="{{$profile->thana}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Union :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="union" placeholder="Union"  value="{{$profile->union}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">City :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="city" placeholder="City"  value="{{$profile->city}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">District :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="district" placeholder="District"  value="{{$profile->district}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Zip Code :</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="zip_code" placeholder="Zip Code"  value="{{$profile->zip_code}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Village :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="village" placeholder="Village"  value="{{$profile->village}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Loan Amount :</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="loan_amount" placeholder="Loan Amount"  value="{{$profile->loan_amount}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Number Of Livestock :</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="no_of_livestock" placeholder="Number OF Livestock"  value="{{$profile->no_of_livestock}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="inputLastName">Type Of Livestock :</label>

                        <div class="form-outline">
                            <select class="form-control" name="type_of_livestock"  value="{{$profile->type_of_livestock}}">

                                <option>Cow</option>
                                <option>Bull</option>
                                <option>Ox</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Sum Insured :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="sum_insured" placeholder="Sum Insured" value="{{$profile->sum_insured}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <img src="{{ asset('storage/' . $profile->image) }}" alt="" style="width: 200px; height: 200px">

                            <label class="form-label" for="inputLastName">Image :</label>
                            <input type="file" id="inputLastName" class="form-control input-style" name="image"/>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Nationality :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="country" placeholder="Country" value="{{$profile->country}}"/>
                        </div>
                    </div><hr>
                    <br>
                    <div class="col-md-6 mb-4">

                        <button type="submit" class="btn text-white" style="background: #086343;">Save</button>

                        <button type="submit" class="btn">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
        </div>
    </div>
</div>
@endsection

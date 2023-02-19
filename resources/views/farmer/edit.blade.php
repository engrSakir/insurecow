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
                            <label class="form-label" for="inputFirstName">{{GoogleTranslate::trans("First Name :",app()->getLocale())}}</label>
                            <input type="text" id="inputFirstName" class="form-control input-style" name="first_name" placeholder="First Name" value="{{GoogleTranslate::trans("$profile->first_name",app()->getLocale())}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans('Last name :',app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="last_name" placeholder="Last Name" value="{{GoogleTranslate::trans("$profile->last_name",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans('Email :',app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans('Phone :',app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Father's Name :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="father_name" placeholder="Father's Name" value="{{GoogleTranslate::trans("$profile->father_name",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Mother's Name :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="mother_name" placeholder="Mother's Name" value="{{GoogleTranslate::trans("$profile->mother_name",app()->getLocale())}}"/>
                        </div>
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Present Address :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="present_address" placeholder="Present Address" value="{{GoogleTranslate::trans("$profile->present_address",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Permanent Address :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="permanent_address" placeholder="Permanent Address" value="{{GoogleTranslate::trans("$profile->permanent_address",app()->getLocale())}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Date Of Birth :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="dob" placeholder="Date Of Birth" value="{{old('dob',$profile->dob)}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("NID/Passport/Birth
                                                Registration No :",app()->getLocale())}}</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="nid" placeholder="NID/Passport/Birth Registration No."  value="{{GoogleTranslate::trans("$profile->nid",app()->getLocale())}}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Source Of Income :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="source_of_income" placeholder="Source Of Income"  value="{{GoogleTranslate::trans("$profile->source_of_income",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Bank Account No :",app()->getLocale())}}</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="bank_no" placeholder="Bank Account No"  value="{{GoogleTranslate::trans("$profile->bank_no",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Farm Address :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="farm_address" placeholder="Farm Address"  value="{{GoogleTranslate::trans("$profile->farm_address",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Thana :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="zila" placeholder="Zila"  value="{{GoogleTranslate::trans("$profile->zila",app()->getLocale())}}"/>
                        </div>
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans(" Upazilla:",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="thana" placeholder="Upozila/Thana"  value="{{GoogleTranslate::trans("$profile->thana",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Union :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="union" placeholder="Union"  value="{{GoogleTranslate::trans("$profile->union",app()->getLocale())}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("City :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="city" placeholder="City"  value="{{GoogleTranslate::trans("$profile->city",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("District :",app()->getLocale())}}</label>
                            <input type="text" id="districts" class="form-control input-style " name="district" placeholder="District"  value="{{GoogleTranslate::trans("$profile->district",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Zip Code :",app()->getLocale())}}</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="zip_code" placeholder="Zip Code"  value="{{GoogleTranslate::trans("$profile->zip_code",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans(" Village :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="village" placeholder="Village"  value="{{GoogleTranslate::trans("$profile->village",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Loan Amount :",app()->getLocale())}}</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="loan_amount" placeholder="Loan Amount"  value="{{GoogleTranslate::trans("$profile->loan_amount",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Number Of Livestock :",app()->getLocale())}}</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="no_of_livestock" placeholder="Number OF Livestock"  value="{{GoogleTranslate::trans("$profile->no_of_livestock",app()->getLocale())}}"/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Type Of Livestock :",app()->getLocale())}}</label>

                        <div class="form-outline">
                            <select id="multiple" class="form-control multiple" name="type_of_livestock[]"  value="{{json_encode($profile->type_of_livestock)}}">

                                <option>Cow</option>
                                <option>Bull</option>
                                <option>Ox</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Sum Insured :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="sum_insured" placeholder="Sum Insured" value="{{GoogleTranslate::trans("$profile->sum_insured",app()->getLocale())}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <img src="{{ asset('storage/' . $profile->image) }}" alt="" style="width: 200px; height: 200px">

                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Image :",app()->getLocale())}}</label>
                            <input type="file" id="inputLastName" class="form-control input-style" name="image"/>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Nationality :",app()->getLocale())}}</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="country" placeholder="Country" value="{{GoogleTranslate::trans("$profile->country",app()->getLocale())}}"/>
                        </div>
                    </div><hr>
                    <br>
                    <div class="col-md-6 mb-4">

                        <button type="submit" class="btn text-white" style="background: #086343;">{{GoogleTranslate::trans("Save",app()->getLocale())}}</button>

                        <button type="submit" class="btn">{{GoogleTranslate::trans("Cancel",app()->getLocale())}}</button>
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

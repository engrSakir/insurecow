@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}"/>

@endpush
@push('select2')

@endpush
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                        <form class="{{ route('farmerprofiles.store') }}" method="POST" enctype="multipart/form-data"
                              style="background: #D7ECCB;">
                            @csrf
                            <div class="card-block p-2 card-block-top mb-4" style="background-color: #0f6848">
                                <h4 class="ms-4">{{GoogleTranslate::trans('Farmer Profile',app()->getLocale())}}</h4>
                            </div>
                            <div class="card-block p-2 card-block-down" style="background: #D7ECCB;">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row px-4">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputFirstName">{{GoogleTranslate::trans('First name :',app()->getLocale())}}</label>
                                            <input type="text" id="inputFirstName" class="form-control input-style"
                                                   name="first_name" placeholder="{{GoogleTranslate::trans('First Name',app()->getLocale())}}"
                                                   value="{{old('first_name')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans('Last name :',app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="last_name" placeholder="{{GoogleTranslate::trans('Last Name',app()->getLocale())}}"
                                                   value="{{old('last_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans('Email :',app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="email"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->email}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans('Phone :',app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="phone"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> {{GoogleTranslate::trans("Father's Name :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="father_name" placeholder="{{GoogleTranslate::trans("Father's Name ",app()->getLocale())}}"
                                                   value="{{old('father_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Mother's Name :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="mother_name" placeholder="{{GoogleTranslate::trans("Mother's Name ",app()->getLocale())}}"
                                                   value="{{old('mother_name')}}"/>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Present Address :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="present_address" placeholder="{{GoogleTranslate::trans("Present Address",app()->getLocale())}}"
                                                   value="{{old('present_address') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Permanent Address :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="permanent_address" placeholder="{{GoogleTranslate::trans("Permanent Address :",app()->getLocale())}}"
                                                   value="{{old('permanent_address')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Date Of Birth :",app()->getLocale())}}</label>
                                            <input type="text" id="datepickerfarmer" class="form-control input-style"
                                                   name="dob" placeholder="{{GoogleTranslate::trans("Date Of Birth ",app()->getLocale())}}" value="{{old('dob')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> {{GoogleTranslate::trans("NID/Passport/Birth
                                                Registration No :",app()->getLocale())}}</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="nid"
                                                   placeholder="{{GoogleTranslate::trans("NID/Passport/Birth Registration No ",app()->getLocale())}}"
                                                   value="{{old('nid')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> {{GoogleTranslate::trans("Source Of Income :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="source_of_income" placeholder="{{GoogleTranslate::trans("Source Of Income ",app()->getLocale())}}"
                                                   value="{{old('source_of_income')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Bank Account No :",app()->getLocale())}}</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="bank_no"
                                                   placeholder="{{GoogleTranslate::trans("Bank Account No ",app()->getLocale())}}" value="{{old('bank_no')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Farm Address :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="farm_address" placeholder="{{GoogleTranslate::trans("Farm Address ",app()->getLocale())}}"
                                                   value="{{old('farm_address')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Thana :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="zila" placeholder="{{GoogleTranslate::trans("Thana ",app()->getLocale())}}" value="{{old('zila')}}"/>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans(" Upazilla:",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="thana" placeholder="{{GoogleTranslate::trans(" Upazilla ",app()->getLocale())}}" value="{{old('thana')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Union :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="union" placeholder="{{GoogleTranslate::trans("Union ",app()->getLocale())}}" value="{{old('union')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("City :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="city" placeholder="{{GoogleTranslate::trans("City ",app()->getLocale())}}" value="{{old('city')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4" id="app">
                                        <div>
                                            <div class="form-outline">
                                                <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("District :",app()->getLocale())}}</label>
                                                <select id="districts" class="form-control districts" name="district">


                                                </select>
                                                {{--                            <input type="text" id="inputLastName" class="form-control input-style" name="district" placeholder="District" value="{{old('district')}}"/>--}}
                                            </div>


                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Zip Code :",app()->getLocale())}}</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="zip_code"
                                                   placeholder="{{GoogleTranslate::trans("Zip Code ",app()->getLocale())}}" value="{{old('zip_code')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans(" Village :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="village" placeholder="{{GoogleTranslate::trans("Village",app()->getLocale())}}" value="{{old('village')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Loan Amount :",app()->getLocale())}}</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="loan_amount"
                                                   placeholder="{{GoogleTranslate::trans("Loan Amount ",app()->getLocale())}}" value="{{old('loan_amount')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outlineawait">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Number Of Livestock :",app()->getLocale())}}</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="no_of_livestock"
                                                   placeholder=" {{GoogleTranslate::trans("Number Of Livestock",app()->getLocale())}}"
                                                   value="{{old('no_of_livestock')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Type Of Livestock :",app()->getLocale())}}</label>

                                        <div class="form-outline">
                                            <select id="multiple" class="form-control multiple"
                                                    name="type_of_livestock[]">

                                                <option>Cow</option>
                                                <option>Bull</option>
                                                <option>Ox</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Sum Insured :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="sum_insured" placeholder="{{GoogleTranslate::trans("Sum Insured ",app()->getLocale())}}"
                                                   value="{{old('sum_insured')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Image :",app()->getLocale())}}</label>
                                            <input type="file" id="inputLastName" class="form-control input-style"
                                                   name="image"/>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">{{GoogleTranslate::trans("Nationality :",app()->getLocale())}}</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="country" placeholder="{{GoogleTranslate::trans("Nationality ",app()->getLocale())}}" value="{{old('country')}}"/>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="col-md-6 mb-4">

                                        <button type="submit" class="btn text-white" style="background: #086343;"> {{GoogleTranslate::trans("Save",app()->getLocale())}}
                                        </button>

                                        <button type="submit" class="btn">{{GoogleTranslate::trans("Cancel",app()->getLocale())}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>
    <script>

        var app = new Vue({
            el: '#app',
            data: {
                districtData: [],
                message: 'dd',
            },
            methods: {
                totalDistricts() {
                    fetch('https://bdapis.com/api/v1.1/districts/').then(res => {
                        return res.json();
                    }).then(el => {
                        let dataFiles = el.data;

                        dataFiles.forEach(el => {

                            var option = document.createElement("option");
                            option.text = el.district;
                            option.value = el.district;
                            var select = document.getElementById("districts");
                            select.appendChild(option);

                        });
                    });
                }
            }, created() {
                this.totalDistricts();
            }
        })
    </script>

@endsection


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
                                <h4 class="ms-4">Farmer Profile</h4>
                            </div>
                            <div class="card-block p-2 card-block-down" style="background: #D7ECCB;">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row px-4">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputFirstName">First name :</label>
                                            <input type="text" id="inputFirstName" class="form-control input-style"
                                                   name="first_name" placeholder="First Name"
                                                   value="{{old('first_name')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Last name :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="last_name" placeholder="Last Name"
                                                   value="{{old('last_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Email :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="email"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->email}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Phone :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="phone"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> Father's Name :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="father_name" placeholder="Father's Name"
                                                   value="{{old('father_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Mother's Name :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="mother_name" placeholder="Mother's Name"
                                                   value="{{old('mother_name')}}"/>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Present Address :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="present_address" placeholder="Present Address"
                                                   value="{{old('present_address') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Permanent Address :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="permanent_address" placeholder="Permanent Address :"
                                                   value="{{old('permanent_address')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Date Of Birth :</label>
                                            <input type="text" id="datepickerfarmer" class="form-control input-style"
                                                   name="dob" placeholder="{{GoogleTranslate::trans("Date Of Birth ",app()->getLocale())}}" value="{{old('dob')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> NID/Passport/Birth
                                                Registration No :</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="nid"
                                                   placeholder="NID/Passport/Birth Registration No"
                                                   value="{{old('nid')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> Farm Location:</label>
                                            <input type="text" id="inputLastName"
                                                   class="form-control input-style" name="farm"
                                                   placeholder="Farm Location"
                                                   value="{{old('farm')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> Group Information:</label>
                                            <input type="text" id="inputLastName"
                                                   class="form-control input-style" name="info"
                                                   placeholder="Group Information"
                                                   value="{{old('info')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> Source Of Income :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="source_of_income" placeholder="Source Of Income "
                                                   value="{{old('source_of_income')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Bank Account No :</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="bank_no"
                                                   placeholder="Bank Account No" value="{{old('bank_no')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Farm Address :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="farm_address" placeholder="Farm Address"
                                                   value="{{old('farm_address')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Thana :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="zila" placeholder="Thana " value="{{old('zila')}}"/>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> Upazilla:</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="thana" placeholder="Upazilla" value="{{old('thana')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Union :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="union" placeholder="Union " value="{{old('union')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">City :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="city" placeholder="City" value="{{old('city')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4" id="app">
                                        <div>
                                            <div class="form-outline">
                                                <label class="form-label" for="inputLastName">District :</label>
                                                <select id="districts" class="form-control districts" name="district">


                                                </select>
                                                {{--                            <input type="text" id="inputLastName" class="form-control input-style" name="district" placeholder="District" value="{{old('district')}}"/>--}}
                                            </div>


                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Zip Code :</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="zip_code"
                                                   placeholder="Zip Code" value="{{old('zip_code')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName"> Village :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="village" placeholder="Village" value="{{old('village')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Loan Amount :</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="loan_amount"
                                                   placeholder="Loan Amount" value="{{old('loan_amount')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outlineawait">
                                            <label class="form-label" for="inputLastName">Number Of Livestock :</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="no_of_livestock"
                                                   placeholder=" Number Of Livestock"
                                                   value="{{old('no_of_livestock')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="inputLastName">Type Of Livestock :</label>

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
                                            <label class="form-label" for="inputLastName">Sum Insured :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="sum_insured" placeholder="Sum Insured"
                                                   value="{{old('sum_insured')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Image :</label>
                                            <input type="file" id="inputLastName" class="form-control input-style"
                                                   name="image"/>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Nationality :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="country" placeholder="Nationality " value="{{old('country')}}"/>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="col-md-6 mb-4">

                                        <button type="submit" class="btn text-white" style="background: #086343;"> Save
                                        </button>

                                        <button type="submit" class="btn">Cancel</button>
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


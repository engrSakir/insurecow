<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== BOOTSTRAP ====================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--==================== FONT AWESOME ====================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/form_page.css') }}"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
            integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>InsureCow</title>

    <style>
        html, body {
            font-family: 'Roboto Slab', serif !important;
        }
        .active {
            background: #ffffff;
        }
        .border-green {
            border-left: 0.25rem solid #086343 !important;
        }
        body,aside,select,option,header,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
            cursor: url('{{ asset('images/favicon.png') }}'), auto;
        }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff !important;
            text-decoration: none;
            background-color: #086343;
        }
        .thead-style {
            background: #086343 !important;
        }
    </style>
</head>

<body style="background: linear-gradient(90deg, rgba(195,234,214,1) 0%, rgba(215,236,203,1) 35%);"> 

<!--==================== NAVBAR ====================-->
@include('inc/farmer_header')


<!--==================== FORM PAGE SECTION ====================-->

<div class="container" style="linear-gradient(#C3EAD6 14.97%, #D7ECCB 90.96%);">
<div id="app">
    <div>
        <section>
            <p class="heading mt-4">Registration Form</p>

            <div class="card mt-4 mb-5">
                <form class="" style="background: #D7ECCB;">

                    <div class="card-block p-2 card-block-top mb-4" style="background: #086343">
                        <h4 class="ms-4">Farmer Information</h4>
                    </div>

                    <div class="card-block p-2 card-block-down" style="background: #D7ECCB;">

                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row px-4">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputFirstName">Farm name :</label>
                                    <input placeholder="Enter Farm Name" type="text" id="farmname" class="form-control input-style"
                                           name="farmname" v-model="farmname"/>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputLastName">Farmer name :</label>
                                    <input placeholder="Enter Farmer Name" type="text" id="farmername" class="form-control input-style" name="farmername" v-model="farmername"/>
                                </div>
                            </div>
                        </div>

                        <!-- 2 column grid layout with text inputs for division and district -->
                        <div class="row px-4">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputDivision">Division :</label>

                                    <div class="col">
                                        <input placeholder="Select Division" type="text" id="division" class="form-control input-style"
                                               name="division" v-model="division"/>
                                        {{--                                <select class="form-select form-info form-control input-style">--}}
                                        {{--                                    <option value="1"></option>--}}
                                        {{--                                </select>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputDistrict">District :</label>
                                    <div class="col">
                                        <input placeholder="Select District" type="text" id="district" class="form-control input-style"
                                               name="district" v-model="district"/>

                                        {{--                                <select class="form-select form-info form-control input-style">--}}
                                        {{--                                    <option value="1"></option>--}}
                                        {{--                                </select>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2 column grid layout with text inputs for thana and post -->
                        <div class="row px-4">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputThana">Thana :</label>
                                    <div class="col">
                                        <input placeholder="Select Thana" type="text" id="thana" class="form-control input-style" name="thana" v-model="thana"/>

                                        {{--                                <select class="form-select form-info form-control input-style">--}}
                                        {{--                                    <option value="1"></option>--}}
                                        {{--                                </select>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputPost">Post :</label>
                                    <div class="col">

                                        <input placeholder="Select Post Office" type="text" id="post" class="form-control input-style" name="post" v-model="post"/>


                                        {{--                                <select class="form-select form-info form-control input-style">--}}
                                        {{--                                    <option value="1"></option>--}}
                                        {{--                                </select>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2 column grid layout with text inputs for NID and Contact number -->
                        <div class="row px-4">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputNID">NID Number :</label>
                                    <input placeholder="Enter Farmer NID Number" type="number" min="10" max="13" id="nid" class="form-control input-style" name="nid" v-model="nid"/>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputContact">Contact Number :</label>
                                    <input placeholder="Enter Contact Number" type="text" id="contact" class="form-control input-style" name="contact" v-model="contact"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-block p-2 card-block-middle mb-4" style="background: #086343">
                        <h4 class="ms-4">Cattle Information</h4>
                    </div>
                    <div class="card-block p-2 card-block-down mb-4" style="background: #D7ECCB;">
                        <div class="row px-4">

                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                        <label class="form-label" for="inputSpecies">Cattle Name :</label>
                                        <div class="col">
                                            <input placeholder="Enter Cattle Name" type="text" id="cattle_name" class="form-control input-style"
                                                name="cattle_name" v-model="cattle_name"/>

                                            {{--                                <select class="form-select form-info form-control input-style">--}}
                                            {{--                                    <option value="1"></option>--}}
                                            {{--                                </select>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputBreed">Cattle Breed :</label>
                                    <div class="col">

                                        <!-- <input placeholder="Select Cattle Bread" type="text" id="" 
                                               name="cattle_breed" /> -->
                                        <select name="cattle_breed" id="cattle_breed" v-model="cattle_breed" class="form-control input-style">
                                            <option value="">SELECT BREED</option>
                                            <option value="sahiwal">Sahiwal</option>
                                            <option value="sindhi">Sindhi</option>
                                            <option value="holstein-friesian">Holstein-Friesian</option>
                                            <option value="jersey">Jersey</option>
                                            <option value="brahman">Brahman</option>
                                            <option value="red-chittagong-cattle">Red Chittagong Cattle</option>
                                            <option value="pabna-cattle">Pabna Cattle</option>
                                            <option value="mirkadim-cattle">Mirkadim Cattle</option>
                                        </select>


                                        {{--                                <select class="form-select form-info form-control input-style">--}}
                                        {{--                                    <option value="1"></option>--}}
                                        {{--                                </select>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputAge">Age :</label>
                                    <input placeholder="Enter Cattle Age" min="1" type="number" id="age" class="form-control input-style" name="age" v-model="age"/>
                                </div>
                            </div>

                        </div>

                        <div class="row px-4">
                            <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                    <label class="form-label" for="inputSpecies">Cattle Color :</label>
                                    <div class="col">
                                        <input placeholder="Select Cattle Color" type="text" id="cattle_color" class="form-control input-style"
                                               name="cattle_color" v-model="cattle_color"/>

                                        {{--                                <select class="form-select form-info form-control input-style">--}}
                                        {{--                                    <option value="1"></option>--}}
                                        {{--                                </select>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputWeight">Weight :</label>
                                    <input placeholder="Enter Cattle Weight" min="" type="number" id="weight" class="form-control input-style" name="weight" v-model="weight"/>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="inputGender">Gender :</label>
                                    <div class="col">
                                        <select class="form-select form-info form-control input-style" name="gender"
                                                id="gender" v-model="gender">
                                                <option value="">Select Cattle Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        {{--                <div class="row px-4">--}}
                        {{--                    <div class="col-md-6 mb-4">--}}
                        {{--                        <div class="form-outline">--}}
                        {{--                            <label class="form-label" for="inputDate">Issuing Date :</label>--}}
                        {{--                            <div class="form-group">--}}
                        {{--                                <!-- Date input -->--}}
                        {{--                                <input class="form-control input-style" type="date"/>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        {{--                    <div class="col-md-6 mb-4">--}}
                        {{--                        <div class="form-outline">--}}
                        {{--                            <label class="form-label" for="inputGender">Period of Insurance :</label>--}}
                        {{--                            <div class="col">--}}
                        {{--                                <select class="form-select form-info form-control input-style">--}}
                        {{--                                    <option value="1"></option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}
                    </div>

                    <div class="card-block p-2 card-block-middle mb-4" style="background: #086343">
                        <h4 class="ms-4">Cattle Pictures </h4>
                    </div>

                    <div class="card-block p-2 card-block-down mb-4" style="background: #D7ECCB;">

                        <div class="row px-4 mt-4 mb-3">

                            <!--Face of cow-->
                            <div class="col-md-4 mb-5">
                                <p>Muzzle of Cow : </p>
                                <div class="file-upload">

                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' onchange="readURL(this);"
                                               @change="faceOfCow"
                                               accept="image/*"/>
                                        <img class="img-card" src="{{asset('/images/image.png')}}"/>
                                    </div>

                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="" alt="face-of-cow"/>

                                    </div>
                                    <div class="image-title-wrap">
                                        <button class="file-upload-btn mt-4" type="button"
                                                onclick="$('.file-upload-input').trigger( 'click' )" style="background: #086343">Upload
                                        </button>
                                        <button type="button" onclick="removeUpload()" class="remove-image">
                                            <i class="fa-solid fa-circle-xmark"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Left Side -->
                            <div class="col-md-4 mb-5">
                                <p>Left Side :</p>
                                <div class="file-upload">

                                    <div class="image2-upload-wrap">
                                        <input class="file2-upload-input" type='file' onchange="readURL2(this);"
                                               @change="leftSide"
                                               accept="image/*"/>
                                        <img class="img-card" src="{{asset('/images/image.png')}}"/>
                                    </div>

                                    <div class="file2-upload-content">
                                        <img class="file2-upload-image" src="" alt="cow-with-owner"/>

                                    </div>
                                    <div class="image2-title-wrap">
                                        <button class="file-upload-btn mt-4" type="button"
                                                onclick="$('.file2-upload-input').trigger( 'click' )" style="background: #086343">Upload
                                        </button>
                                        <button type="button" onclick="removeUpload2()" class="remove-image">
                                            <i class="fa-solid fa-circle-xmark"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side -->
                            <div class="col-md-4 mb-5">
                                <p>Right Side :</p>
                                <div class="file-upload">

                                    <div class="image3-upload-wrap">
                                        <input class="file3-upload-input" type='file' onchange="readURL3(this);"
                                               @change="rightSide"
                                               accept="image/*"/>
                                        <img class="img-card" src="{{asset('images/image.png')}}"/>
                                    </div>

                                    <div class="file3-upload-content">
                                        <img class="file3-upload-image" src="" alt="cow-with-owner"/>

                                    </div>
                                    <div class="image3-title-wrap">
                                        <button class="file-upload-btn mt-4" type="button"
                                                onclick="$('.file3-upload-input').trigger( 'click' )" style="background: #086343">Upload
                                        </button>
                                        <button type="button" onclick="removeUpload3()" class="remove-image">
                                            <i class="fa-solid fa-circle-xmark"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Special Marks -->
                            <div class="col-md-4 mb-5">
                                <p>Special Marks : </p>
                                <div class="file-upload">

                                    <div class="image4-upload-wrap">
                                        <input class="file4-upload-input" type='file' onchange="readURL4(this);"
                                               accept="image/*" @change="specialMark"/>
                                        <img class="img-card" src="{{asset('images/image.png')}}"/>
                                    </div>

                                    <div class="file4-upload-content">
                                        <img class="file4-upload-image" src="" alt="cow-with-owner"/>

                                    </div>
                                    <div class="image4-title-wrap">
                                        <button class="file-upload-btn mt-4" type="button"
                                                onclick="$('.file4-upload-input').trigger( 'click' )" style="background: #086343">Upload
                                        </button>
                                        <button type="button" onclick="removeUpload4()" class="remove-image">
                                            <i class="fa-solid fa-circle-xmark"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Cow with owner -->
                            <div class="col-md-4 mb-5">
                                <p>Cow with Owner : </p>
                                <div class="file-upload">

                                    <div class="image5-upload-wrap">
                                        <input class="file5-upload-input" type='file' onchange="readURL5(this);"
                                               accept="image/*" @change="cowWithOwner"/>
                                        <img class="img-card" src="{{asset('images/image.png')}}"/>
                                    </div>

                                    <div class="file5-upload-content">
                                        <img class="file5-upload-image" src="" alt="cow-with-owner"/>

                                    </div>
                                    <div class="image5-title-wrap">
                                        <button class="file-upload-btn mt-4" type="button"
                                                onclick="$('.file5-upload-input').trigger( 'click' )" style="background: #086343">Upload
                                        </button>
                                        <button type="button" onclick="removeUpload5()" class="remove-image">
                                            <i class="fa-solid fa-circle-xmark"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--PDf Attachments-->
                    {{-------------------- Field agent information ----------------------------- --}}
                    <div class="card-block p-2 card-block-middle mb-4" style="background: #086343">
                        <h4 class="ms-4">Additional Info</h4>
                    </div>
                    <div class="card-block p-2 card-block-down mb-4" style="background: #D7ECCB;">
                        <div class="row px-4">

                            <!-- <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="health">Add Health :</label>
                                    <div class="col">

                                        <input type="text" id="health" class="form-control input-style" v-model="health"/>


                                        {{--                                <select class="form-select form-info form-control input-style">--}}
                                        {{--                                    <option value="1"></option>--}}
                                        {{--                                </select>--}}
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="price">Current Price: </label>
                                    <input placeholder="Enter Current Price" type="number" id="price" class="form-control input-style" v-model="price"/>
                                </div>
                            </div>

                        </div>


                        <hr>

                        {{--                <div class="row px-4">--}}
                        {{--                    <div class="col-md-6 mb-4">--}}
                        {{--                        <div class="form-outline">--}}
                        {{--                            <label class="form-label" for="inputDate">Issuing Date :</label>--}}
                        {{--                            <div class="form-group">--}}
                        {{--                                <!-- Date input -->--}}
                        {{--                                <input class="form-control input-style" type="date"/>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        {{--                    <div class="col-md-6 mb-4">--}}
                        {{--                        <div class="form-outline">--}}
                        {{--                            <label class="form-label" for="inputGender">Period of Insurance :</label>--}}
                        {{--                            <div class="col">--}}
                        {{--                                <select class="form-select form-info form-control input-style">--}}
                        {{--                                    <option value="1"></option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}
                    </div>


                    <div class="px-4 mb-4" style="background: #D7ECCB;">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                I agree to platform Terms of Service and Privacy Policy
                            </label>

                        </div>
                    </div>

                    <!-- Register button -->

                    <div class="px-4 py-5" style="background: #D7ECCB;">
                        <button type="button" class="register-button" @click="addcow()" style="background: #086343">Register</button>

                    </div>


                    <!-- <div class="px-4 py-5">
                        <button type="submit" class="register-button">Register</button>

                    </div> -->


                </form>
            </div>

        </section>
    </div>
</div>
</div>


<!--==================== FOOTER ====================-->


{{------------------------------------------------------------------- post requiest ------------------------------------------------------------------ --}}

<script>

    var app = new Vue({
        el: '#app',
        data() {
            return {
                farmname : "",
                farmername : "",
                division : "",
                district : "",
                thana : "",
                post : "",
                nid : "",
                contact : "",
                cattle_name : "",
                cattle_color : "",
                cattle_breed : "",
                age : "",
                weight : "",
                gender : "",
                // health : "",
                price : "",

                face_of_cow: "",
                left_side: "",
                right_side: "",
                special_mark: "",
                cow_with_owner: "",
            };
        }, methods: {
            faceOfCow(event) {
                var vm = this;
                vm.face_of_cow = event.target.files[0];
            },

            leftSide(event) {
                var vm = this;
                vm.left_side = event.target.files[0];
            },

            rightSide(event) {
                var vm = this;
                vm.right_side = event.target.files[0];
            },

            specialMark(event) {
                var vm = this;
                vm.special_mark = event.target.files[0];
            },

            cowWithOwner(event) {
                var vm = this;
                vm.cow_with_owner = event.target.files[0];
            },

            addcow() {
                const formData = new FormData();
                formData.set("farmname", this.farmname);
                formData.set("farmername", this.farmername);
                formData.set("division", this.division);
                formData.set("district", this.district);
                formData.set("thana", this.thana);
                formData.set("post", this.post);
                formData.set("nid", this.nid);
                formData.set("contact", this.contact);
                formData.set("cattle_name", this.cattle_name);
                formData.set("cattle_color", this.cattle_color);
                formData.set("cattle_breed", this.cattle_breed);
                formData.set("age", this.age);
                formData.set("weight", this.weight);
                formData.set("gender", this.gender);

                formData.set("face_of_cow", this.face_of_cow);
                formData.set("left_side", this.left_side);
                formData.set("right_side", this.right_side);
                formData.set("special_mark", this.special_mark);
                formData.set("cow_with_owner", this.cow_with_owner);

                // formData.set("health", this.health);
                formData.set("price", this.price);


                window.axios.post('{{ route('reg_two.store') }}', formData).then(el => {
                    // console.log(el);
                    // location.reload();
                    alert('Data added successfully!');
                    window.location.href = '/farmer/confirmation';
                });
            
            }
        }
    })


    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //
    //         let test = input.files[0];
    //
    //         var reader = new FileReader();
    //
    //         reader.onload = function (e) {
    //             $('.image-upload-wrap').hide();
    //
    //             $('.file-upload-image').attr('src', e.target.result);
    //             $('.file-upload-content').show();
    //
    //             $('.image-title').html(input.files[0].name);
    //         };
    //
    //         reader.readAsDataURL(input.files[0]);
    //
    //     } else {
    //         removeUpload();
    //     }
    // }

    {{--function addcow() {--}}

    {{--    const formData = new FormData();--}}
    {{--    formData.set("test", test);--}}
    {{--    window.axios.post('{{ route('reg_two.store') }}', formData).then(el => {--}}
    {{--        console.log(el);--}}
    {{--    });--}}
    {{--}--}}

</script>

{{------------------------------------------------------------------- post requiest ------------------------------------------------------------------ --}}


<hr class="hr-style">
@include('inc.ffooter')

<!--==================== JavaScript Bundle with Popper ====================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<script src="{{ asset('js/reg_js/face_of_cow.js') }}"></script>
<script src="{{ asset('js/reg_js/left_side.js') }}"></script>
<script src="{{ asset('js/reg_js/right_side.js') }}"></script>
<script src="{{ asset('js/reg_js/special_marks.js') }}"></script>
<script src="{{ asset('js/reg_js/cow_with_owner.js') }}"></script>
<script src="{{ asset('js/reg_js/pdf_upload.js') }}"></script>


</body>

</html>

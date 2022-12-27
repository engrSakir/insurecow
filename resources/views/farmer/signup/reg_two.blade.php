<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== BOOTSTRAP ====================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--==================== FONT AWESOME ====================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/form_page.css') }}" />
    

    <title>InsureCow</title>
</head>

<body class="container">

    <!--==================== NAVBAR ====================-->
    @include('inc/header')
   

    <!--==================== FORM PAGE SECTION ====================-->

    <section>
        <p class="heading mt-4">Registration Form</p>

        <div class="card card-style mt-4 mb-5">
            <form class="">

                <div class="card-block p-2 card-block-top mb-4">
                    <h4 class="ms-4">Farmer Information</h4>
                </div>

                <div class="card-block p-2 card-block-down">

                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row px-4">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputFirstName">First name :</label>
                                <input type="text" id="inputFirstName" class="form-control input-style" />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputLastName">Last name :</label>
                                <input type="text" id="inputLastName" class="form-control input-style" />
                            </div>
                        </div>
                    </div>

                    <!-- 2 column grid layout with text inputs for division and district -->
                    <div class="row px-4">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputDivision">Division :</label>
                                <div class="col">
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputDistrict">District :</label>
                                <div class="col">
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
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
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputPost">Post :</label>
                                <div class="col">
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 column grid layout with text inputs for NID and Contact number -->
                    <div class="row px-4">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputNID">NID Number :</label>
                                <input type="text" id="inputNID" class="form-control input-style" />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputContact">Contact Number :</label>
                                <input type="text" id="inputContact" class="form-control input-style" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-block p-2 card-block-middle mb-4">
                    <h4 class="ms-4">Cattle Information</h4>
                </div>
                <div class="card-block p-2 card-block-down mb-4">
                    <div class="row px-4">

                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputSpecies">Cattle Species :</label>
                                <div class="col">
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputBreed">Cattle Breed :</label>
                                <div class="col">
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputAge">Age :</label>
                                <input type="text" id="inputAge" class="form-control input-style" />
                            </div>
                        </div>

                    </div>

                    <div class="row px-4">
                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputWeight">Weight :</label>
                                <input type="text" id="inputWeight" class="form-control input-style" />
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputGender">Gender :</label>
                                <div class="col">
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row px-4">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputDate">Issuing Date :</label>
                                <div class="form-group">
                                    <!-- Date input -->
                                    <input class="form-control input-style" type="date" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputGender">Period of Insurance :</label>
                                <div class="col">
                                    <select class="form-select form-info form-control input-style">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-block p-2 card-block-middle mb-4">
                    <h4 class="ms-4">Cattle Pictures </h4>
                </div>

                <div class="card-block p-2 card-block-down mb-4">

                    <div class="row px-4 mt-4 mb-3">

                        <!--Face of cow-->
                        <div class="col-md-4 mb-5">
                            <p>Face of cow :</p>
                            <div class="file-upload">

                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type='file' onchange="readURL(this);"
                                        accept="image/*" />
                                    <img class="img-card" src="{{asset('/images/image.png')}}" />
                                </div>

                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="" alt="face-of-cow" />

                                </div>
                                <div class="image-title-wrap">
                                    <button class="file-upload-btn mt-4" type="button"
                                        onclick="$('.file-upload-input').trigger( 'click' )">Upload</button>
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
                                        accept="image/*" />
                                    <img class="img-card" src="{{asset('/images/image.png')}}" />
                                </div>

                                <div class="file2-upload-content">
                                    <img class="file2-upload-image" src="" alt="cow-with-owner" />

                                </div>
                                <div class="image2-title-wrap">
                                    <button class="file-upload-btn mt-4" type="button"
                                        onclick="$('.file2-upload-input').trigger( 'click' )">Upload</button>
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
                                        accept="image/*" />
                                    <img class="img-card" src="{{asset('images/image.png')}}" />
                                </div>

                                <div class="file3-upload-content">
                                    <img class="file3-upload-image" src="" alt="cow-with-owner" />

                                </div>
                                <div class="image3-title-wrap">
                                    <button class="file-upload-btn mt-4" type="button"
                                        onclick="$('.file3-upload-input').trigger( 'click' )">Upload</button>
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
                                        accept="image/*" />
                                    <img class="img-card" src="{{asset('images/image.png')}}" />
                                </div>

                                <div class="file4-upload-content">
                                    <img class="file4-upload-image" src="" alt="cow-with-owner" />

                                </div>
                                <div class="image4-title-wrap">
                                    <button class="file-upload-btn mt-4" type="button"
                                        onclick="$('.file4-upload-input').trigger( 'click' )">Upload</button>
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
                                        accept="image/*" />
                                    <img class="img-card" src="{{asset('images/image.png')}}" />
                                </div>

                                <div class="file5-upload-content">
                                    <img class="file5-upload-image" src="" alt="cow-with-owner" />

                                </div>
                                <div class="image5-title-wrap">
                                    <button class="file-upload-btn mt-4" type="button"
                                        onclick="$('.file5-upload-input').trigger( 'click' )">Upload</button>
                                    <button type="button" onclick="removeUpload5()" class="remove-image">
                                        <i class="fa-solid fa-circle-xmark"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--PDf Attachments-->
               

                
          
                    </div>
                </div>

                

                <div class="card-block p-2 card-block-middle mb-4">
                    <h4 class="ms-4"> Checking </h4>
                </div>

                <div class="card-block p-2 card-block-down mb-4">
                    <div class="row px-4">

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputChecked">Checked By :</label>
                                <input type="text" id="inputChecked" class="form-control input-style" />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputMR">MR Number :</label>
                                <input type="text" id="inputMR" class="form-control input-style" />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="inputDate">MR Date :</label>
                                <div class="form-group">
                                    <!-- Date input -->
                                    <input class="form-control input-style" type="date" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="px-4 mb-4">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            I agree to platform Terms of Service and Privacy Policy
                        </label>

                    </div>
                </div>

                <!-- Register button -->
                <div class="px-4 py-5">
                    <button type="submit" class="register-button">Register </button>

                </div>


            </form>
        </div>

    </section>

    <!--==================== FOOTER ====================-->
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
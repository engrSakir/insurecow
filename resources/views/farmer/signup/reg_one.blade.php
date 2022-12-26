<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--==================== BOOTSTRAP ====================-->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />

    <!--==================== FONT AWESOME ====================-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/form_page.css') }}" />

    <title>InsureCow</title>
</head>

<body class="container">

@include('inc/header')

<!--==================== FORM PAGE SECTION ====================-->

<section>
    <p class="heading mt-4">Registration Form</p>

    <div class="card card-style mt-4 mb-5">
        <div class="card-block p-2 card-block-middle mb-4">
            <h4 class="ms-4">Attachment</h4>
        </div>
        <form class="">
            <div class="card-block p-2 card-block-down mb-4">
                <div class="row px-4 mt-4 mb-3">
                    <!-- Owner NID : -->
                    <div class="col-md-4 mb-5">
                        <p>Owner NID :</p>
                        <div class="file-upload">
                            <div class="image-upload-wrap">
                                <input
                                    class="file-upload-input"
                                    type="file"
                                    onchange="readURL(this);"
                                    accept="image/*"
                                />
                                <img class="img-card" src="{{ asset('images/image.png') }}" />
                            </div>

                            <div class="file-upload-content">
                                <img class="file-upload-image" src="" alt="face-of-cow" />
                            </div>
                            <div class="image-title-wrap">
                                <button
                                    class="file-upload-btn mt-4"
                                    type="button"
                                    onclick="$('.file-upload-input').trigger( 'click' )"
                                >
                                    Upload
                                </button>
                                <button
                                    type="button"
                                    onclick="removeUpload()"
                                    class="remove-image"
                                >
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Vet Certiicate -->
                    <div class="col-md-4 mb-5">
                        <p>Vet Certificate:</p>
                        <div class="file-upload">
                            <div class="image2-upload-wrap">
                                <input
                                    class="file2-upload-input"
                                    type="file"
                                    onchange="readURL2(this);"
                                    accept="image/*"
                                />
                                <img class="img-card" src="{{ asset('images/image.png') }}" />
                            </div>

                            <div class="file2-upload-content">
                                <img
                                    class="file2-upload-image"
                                    src=""
                                    alt="cow-with-owner"
                                />
                            </div>
                            <div class="image2-title-wrap">
                                <button
                                    class="file-upload-btn mt-4"
                                    type="button"
                                    onclick="$('.file2-upload-input').trigger( 'click' )"
                                >
                                    Upload
                                </button>
                                <button
                                    type="button"
                                    onclick="removeUpload2()"
                                    class="remove-image"
                                >
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Chairman Certificate -->
                    <div class="col-md-4 mb-5">
                        <p>Chairman Certificate :</p>
                        <div class="file-upload">
                            <div class="image3-upload-wrap">
                                <input
                                    class="file3-upload-input"
                                    type="file"
                                    onchange="readURL3(this);"
                                    accept="image/*"
                                />
                                <img class="img-card" src="{{ asset('images/image.png') }}" />
                            </div>

                            <div class="file3-upload-content">
                                <img
                                    class="file3-upload-image"
                                    src=""
                                    alt="cow-with-owner"
                                />
                            </div>
                            <div class="image3-title-wrap">
                                <button
                                    class="file-upload-btn mt-4"
                                    type="button"
                                    onclick="$('.file3-upload-input').trigger( 'click' )"
                                >
                                    Upload
                                </button>
                                <button
                                    type="button"
                                    onclick="removeUpload3()"
                                    class="remove-image"
                                >
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="row px-4">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="inputFirstName"
                        >Issuing Date</label
                        >
                        <input
                            type="date"
                            id="inputFirstName"
                            class="form-control input-style"
                        />
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="inputLastName"
                        >Period of Insurance:</label
                        >

                        <select name="" id="" class="form-control input-style">
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--PDf Attachments-->

            <div class="px-4 mb-4">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="invalidCheck2"
                        required
                    />
                    <label class="form-check-label" for="invalidCheck2">
                        I agree to platform Terms of Service and Privacy Policy
                    </label>
                </div>
            </div>

            <!-- Register button -->
            <div class="px-4 py-5">
                <button type="submit" class="register-button">Register</button>
            </div>
        </form>
    </div>
</section>

<!--==================== FOOTER ====================-->
<hr class="hr-style" />

@include('inc.ffooter')

<!--==================== JavaScript Bundle with Popper ====================-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>

<script
    class="jsbin"
    src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"
></script>

<script src="{{ asset('js/face_of_cow.js') }}"></script>
<script src="{{ asset('js/left_side.js') }}"></script>
<script src="{{ asset('js/right_side.js') }}"></script>
<script src="{{ asset('js/special_marks.js') }}"></script>
<script src="{{ asset('js/cow_with_owner.js') }}"></script>
<script src="{{ asset('js/pdf_upload.js') }}"></script>
</body>
</html>

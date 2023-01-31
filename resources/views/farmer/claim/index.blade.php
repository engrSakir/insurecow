@extends('layouts.farmer')
<style>
    /*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap");

/*=============== BASE ===============*/

* {
    box-sizing: border-box;
    margin: 0;
}

html body {
    font-family: "Poppins", sans-serif;
    color: #082E13;
}

.hr-style {
    margin: 0;
    background: #2F673F;
}

/*=============== NAVBAR ===============*/

nav .navbar-nav li a {
    font-size: 18px;
    color: #082E13 !important;
}

nav .navbar-nav li a:hover {
    text-decoration: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px;
    text-decoration-color: #1D5C2E;

}

.navbar-light .navbar-toggler {
    border-color: #fff;
}

.navbar-toggler:focus {
    box-shadow: none;
}

.vr-style {
    color: #2F673F;
    margin-top: 14px;
    height: 30px;
}

.signout-button {
    width: 140px;
    background: #23BB86;
    color: #fff;
    font-size: 18px;
    text-align: center;
    border: none;
    border-radius: 5px;
    padding: 8px 0px;
}

/*=============== FORM PAGE ===============*/

.heading{
    font-size: 28px;
}

.card-style{
    border-radius: 10px;
    border: none;
    box-shadow: rgba(79, 172, 35, 0.67) 0px 4px 8px;    
}

.card-block-top {
    background-color: #23BB86;
    color: #fff;
    border-radius: 10px 10px 0 0;
}

.card-block-middle {
    background-color: #23BB86;
    color: #fff;
}

.card-block-down {
    background-color: #FDFCFC;
    border-radius: 0 0 10px 10px;
    padding: 20px 100px 80px 50px;
}

.input-style{
    border-radius: 10px;
}

/* Add image*/


.file-upload {
    width: 240px;
}

.file-upload-btn  {
    width: 120px;
    height: 30px;
    background: #23BB86;
    color: #fff;
    font-size: 16px;
    text-align: center;
    border: none;
    border-radius: 20px;
    margin-right: 80px;
}

.file-upload-btn:hover  {
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
}

.file-upload-btn:active{
    border: 0;
    transition: all .2s ease;
}

.file-upload-content,
.file2-upload-content,
.file3-upload-content,
.file4-upload-content,
.file5-upload-content {
    display: none;
    text-align: center;
}

.file-upload-input,
.file2-upload-input,
.file3-upload-input,
.file4-upload-input,
.file5-upload-input{
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
}

.image-upload-wrap,
.image2-upload-wrap,
.image3-upload-wrap,
.image4-upload-wrap,
.image5-upload-wrap {
    margin-top: 20px;
    position: relative;
}


.img-card,
.file-upload-image,
.file2-upload-image,
.file3-upload-image,
.file4-upload-image,
.file5-upload-image{
    width: 240px;
    height: 180px;
    border-radius: 12px;
    border: 1px solid #2F673F;
}

.remove-image {
    background: none;
    color: #cd4535;
    border: none;
    transition: all .2s ease;
}

.remove-image:hover{
    transition: all .2s ease;
    cursor: pointer;
}

.remove-image:active {
    border: 0;
    transition: all .2s ease;
}

/* pdf upload */

.pdf-upload-content{
    display: none;
    text-align: center;
}

.pdf-upload-input{
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
}

.pdf-upload-wrap {
    margin-top: 20px;
    position: relative;
}



.pdf-upload-image{
    width: 240px;
    height: 180px;
    border-radius: 12px;
    border: 1px solid #2F673F;
}

/* Submit Button*/

.register-button{
    width: 120px;
    height: 30px;
    background: #23BB86;
    color: #fff;
    font-size: 16px;
    text-align: center;
    border: none;
    border-radius: 20px;
    margin-right: 80px;
}


/*=============== FOOTER ===============*/

.language-footer {
    text-decoration: none;
    color: #082E13;
}

.language-footer:hover {
    color: #082E13;
    text-decoration: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px;
    text-decoration-color: #1D5C2E;

}

/*=============== Media screen for mobile devices ===============*/

@media only screen and (max-width: 600px) {

    /* Navbar */
    .signout-button {
        width: 120px;
        padding: 6px 0px;
    }
}

select.form-control{
    -webkit-appearance: menulist!important;
    -moz-appearance: menulist!important;
    -ms-appearance: menulist!important;
    -o-appearance: menulist!important;
    appearance: menulist!important;
}
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 mt-5 mb-5" style="background: #D7ECCB;border: 1px solid black; border-radius:10px">
                <div class="card mt-3">
                    <div class="card-header" style="background: #D7ECCB;">
                        <h2 class="text-center h3">Claim Insurance For Your Cattle</h2>
                        <p class="text-center">Fill Up The Form</p>
                    </div>
                    <div class="card-body" style="background: #D7ECCB;">
                        <form action="{{ route('claim.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="cattle_id">Select Your Cattle:</label>
                                <select name="cattle_id" id="cattle_id" class="form-control">
                                    <option value="">SELECT CATTLE</option>
                                    @foreach($cattles as $cattle)
                                        <option value="{{ $cattle->id }}">{{ $cattle->cattle_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="muzzle">Upload Muzzle:</label>
                                <div class="col-md-12 mb-2 p-3" style="background: #D7ECCB;">
                                    <div class="file-upload" style="margin: auto">
                                        <div class="image-upload-wrap">
                                            <input
                                                class="file-upload-input"
                                                type="file"
                                                onchange="readURL(this);"
                                                accept="image/*"
                                                name="muzzle"
                                            />
                                            <img class="img-card" src="{{ asset('images/image.png') }}"/>
                                        </div>

                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="" alt="face-of-cow"/>
                                        </div>
                                        <div class="image-title-wrap">
                                            <button
                                                class="file-upload-btn mt-4"
                                                type="button"
                                                onclick="$('.file-upload-input').trigger( 'click' )"
                                                style="background: #086343"
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
                            </div>
                            <div class="form-group mb-2">
                                <label for="cause_of_death">Cause of Death:</label>
                                <textarea name="cause_of_death" class="form-control" id="cause_of_death" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn text-white" style="background: #086343">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
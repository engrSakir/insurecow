
<html lang="en" >
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
    <link rel="stylesheet" href="<?php echo e(asset('css/form_page.css')); ?>"/>

    <title>InsureCow</title>
</head>

<body style="background: #D7ECCB;">

<?php echo $__env->make('inc/farmer_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--==================== FORM PAGE SECTION ====================-->

<div class="container">
<section>
    <p class="heading mt-4">Registration Form</p>

    <div class="card card-style mt-4 mb-5" style="background: #D7ECCB;">
        <div class="card-block p-2 card-block-middle mb-4" style="background: #086343">
            <h4 class="ms-4">Attachment</h4>
        </div>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
        <form class="<?php echo e(route('reg_one.store')); ?>" method="post" enctype="multipart/form-data" style="background: #D7ECCB;">
            <?php echo e(csrf_field()); ?>

            <div class="card-block p-2 card-block-down mb-4" style="background: #D7ECCB;">
                <div class="row px-4 mt-4 mb-3" style="background: #D7ECCB;">
                    <!-- Owner NID : -->
                    <div class="col-md-4 mb-5" style="background: #D7ECCB;">
                        <p>Owner NID :</p>
                        <div class="file-upload">
                            <div class="image-upload-wrap">
                                <input
                                    class="file-upload-input"
                                    type="file"
                                    onchange="readURL(this);"
                                    accept="image/*"
                                    name="nid"
                                />
                                <img class="img-card" src="<?php echo e(asset('images/image.png')); ?>"/>
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

                    <!-- Vet Certiicate -->
                    <div class="col-md-4 mb-5" style="background: #D7ECCB;">
                        <p>Vet Certificate:</p>
                        <div class="file-upload">
                            <div class="image2-upload-wrap">
                                <input
                                    class="file2-upload-input"
                                    type="file"
                                    onchange="readURL2(this);"
                                    accept="image/*"
                                    name="vet"
                                />
                                <img class="img-card" src="<?php echo e(asset('images/image.png')); ?>"/>
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
                                    style="background: #086343"
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
                    <div class="col-md-4 mb-5" style="background: #D7ECCB;">
                        <p>Chairman Certificate :</p>
                        <div class="file-upload">
                            <div class="image3-upload-wrap">
                                <input
                                    class="file3-upload-input"
                                    type="file"
                                    onchange="readURL3(this);"
                                    accept="image/*"
                                    name="chairman"
                                />
                                <img class="img-card" src="<?php echo e(asset('images/image.png')); ?>"/>
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
                                    style="background: #086343"
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

            <hr/>

            <div class="row px-4">
                <!-- <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="inputFirstName"
                        >Issuing Date</label
                        >
                        <input
                            type="date"
                            id="inputFirstName"
                            class="form-control input-style"
                            name="issue_date"
                        />
                    </div>
                </div> -->

                <!-- <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="inputLastName"
                        >Period of Insurance:</label
                        >

                        <select name="poi" id="" class="form-control input-style">
                            <option value="1">1</option>
                        </select>
                    </div>
                </div> -->
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
                <button type="submit" class="register-button" style="background: #086343">Register</button>
            </div>
        </form>
    </div>
</section>
</div>

<!--==================== FOOTER ====================-->
<hr class="hr-style"/>

<?php echo $__env->make('inc.ffooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--==================== JavaScript Bundle with Popper ====================-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
</script>

<script
    class="jsbin"
    src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
</script>

<script src="<?php echo e(asset('js/reg_js/face_of_cow.js')); ?>"></script>
<script src="<?php echo e(asset('js/reg_js/left_side.js')); ?>"></script>
<script src="<?php echo e(asset('js/reg_js/right_side.js')); ?>"></script>
<script src="<?php echo e(asset('js/reg_js/special_marks.js')); ?>"></script>
<script src="<?php echo e(asset('js/reg_js/cow_with_owner.js')); ?>"></script>
<script src="<?php echo e(asset('js/reg_js/pdf_upload.js')); ?>"></script>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php if(session()->has('msg')): ?>
        <script>
           swal("Done!!","<?php echo Session::get('msg'); ?>","success",{
              button:"OK",
            })
        </script>

    <?php endif; ?>


</body>
</html>


<?php /**PATH /home/pc-1/insurecow/resources/views/farmer/signup/reg_one.blade.php ENDPATH**/ ?>
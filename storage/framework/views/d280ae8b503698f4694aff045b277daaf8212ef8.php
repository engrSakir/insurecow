<?php $__env->startSection('content'); ?>


    <!--==================== REGISTER PAGE 01 ====================-->

    <section>
        <div class="row g-0 mt-5 mb-5">
            <div class="col-lg-6">
                <div class="card card-style h-100">
                    <div class="card-body">
                        <img src="<?php echo e(asset('images/cow2.png')); ?>" class="img-fluid" alt="Cow">
                    </div>
                </div>
            </div>


            <!--Register Form-->
            <div class="col-lg-6">
                <div class="card right-card p-5 h-100">
                    <div class="card-body">
                        <p class="heading-text mb-4">Register Account</p>
                        <p class="subheading-text mb-5"> Creat your Insure Cow account! </p>

                        <form action="<?php echo e(route('farmer.store')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>


                            <!--User Name-->
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name: </label>
                                <input type="text" name="name" class="form-control fontAwesome input-form" placeholder="&#xf007;"
                                    required="required">
                            </div>

                             <!--User Email-->
                             <div class="mb-4">
                                <label for="email" class="form-label">Email: </label>
                                <input type="email" name="email" class="form-control fontAwesome input-form" placeholder="&#xf0e0;"
                                    required="required">

                            </div>
                            <div class="mb-4">
                                <label for="nid"  class="form-label">NID: </label>
                                <input type="text" name="nid" class="form-control fontAwesome input-form" placeholder="&#xf0e0;"
                                    required="required">
                            </div>
                            <div class="mb-4">
                                <label for="date" class="form-label">Date OF Birth: </label>
                                <input type="date" name="dob" class="form-control fontAwesome input-form" placeholder="&#xf0e0;"
                                    required="required">
                            </div>
                            <div class="mb-4">
                                <label for="phone"  class="form-label">Phone Number: </label>
                                <input type="text" name="phone" class="form-control fontAwesome input-form" placeholder="&#xf0e0;"
                                    required="required">
                            </div>


                            <div class="mb-4">
                                <label for="address"  class="form-label">Address: </label>
                                <input type="text" name="adress" class="form-control fontAwesome input-form" placeholder="&#xf0e0;"
                                       required="required">
                            </div>

                             <!--User Password-->
                             <div class="mb-4">
                                <label for="password" class="form-label">Password :  </label>
                                <input type="password" name="password" class="form-control fontAwesome input-form" id="password"
                                    placeholder="&#xf023;" required="required">
                            </div>




                            <!--Terms & Conditions-->
                            <div class="col-12 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                        required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        I agree to platform Terms of Service and Privacy Policy
                                    </label>
                                </div>
                            </div>

                            <!--Register Button-->
                            <button type="submit" class="register-button">Register</button>

                        </form>

                        <hr class="hr-style">

                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
    </html>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/signup/index.blade.php ENDPATH**/ ?>
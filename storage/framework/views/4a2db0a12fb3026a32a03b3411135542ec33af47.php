    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="<?php echo e(asset('css/login_page.css')); ?>" />
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="col-lg-6 col-xs-12" style="margin: auto">
          <div class="card login-card p-5 h-100" style="background: #D7ECCB;">
            <div class="card-body">
              <?php if($message = Session::get('password_success')): ?>
                <p class="p-welcome-text mb-5 alert alert-success"><?php echo e($message); ?></p>
                <!-- <div class="alert alert-success alert-block">
                    <strong>Password must contain at least 1 letter, 1 number, and 1 symbol. Minimum length is 8 characters.</strong>
                </div> -->
              <?php endif; ?>
              <?php if($message = Session::get('password_failed')): ?>
                <p class="p-welcome-text mb-5 alert alert-danger"><?php echo e($message); ?></p>
              <?php endif; ?>
              <form action="<?php echo e(route('farmer.password.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
              <!--User Name-->
                <div class="mb-4 password-container" style="position: relative">
                  <label for="password" class="form-label">Old Password: </label>
                  <input type="password" class="form-control input-form" placeholder="Enter Old Password" required="required" name="current_password" id="current_password">
                  <i class="fas fa-eye-slash fa-eye" id="eye"></i>
                </div>

                <!--User Password-->
                <div class="mb-4" style="position: relative">
                  <label for="password" class="form-label">New Password: </label>
                  <input type="password" class="form-control input-form" placeholder="Enter New Password" required="required" name="new_password" id="new_password">
                  <i class="fas fa-eye fa-eye-slash" id="eye_1"></i>
                </div>

                <!--User Password-->
                <div class="mb-4" style="position: relative">
                  <label for="password" class="form-label">Confirm Password: </label>
                  <input type="password" class="form-control input-form" placeholder="Confirm New Password" required="required" name="verify_password" id="verify_password">
                  <i class="fas fa-eye fa-eye-slash" id="eye_2"></i>
                </div>

                <!--Log In Button-->
                <button type="submit" class="btn mb-4 text-white" style="background: #086343;">
                    Change Password
                </button>
                <a type="submit" class="btn btn-default mb-4">
                    Cancel
                </a>

              </form>
              <hr class="hr-style">
            </div>
          </div>
        </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>


<script>
      const passwordInput = document.querySelector("#current_password")
      const eye = document.querySelector("#eye")
      eye.addEventListener("click", function(){
      this.classList.toggle("fa-eye-slash")
      const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
      passwordInput.setAttribute("type", type)
        })
    </script>
<script>
      const passwordInput1 = document.querySelector("#new_password")
      const eye1 = document.querySelector("#eye_1")
      eye1.addEventListener("click", function(){
      this.classList.toggle("fa-eye-slash")
      const type = passwordInput1.getAttribute("type") === "password" ? "text" : "password"
      passwordInput1.setAttribute("type", type)
        })
    </script>
<script>
      const passwordInput2 = document.querySelector("#verify_password")
      const eye2 = document.querySelector("#eye_2")
      eye2.addEventListener("click", function(){
      this.classList.toggle("fa-eye-slash")
      const type = passwordInput2.getAttribute("type") === "password" ? "text" : "password"
      passwordInput2.setAttribute("type", type)
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/change-password.blade.php ENDPATH**/ ?>
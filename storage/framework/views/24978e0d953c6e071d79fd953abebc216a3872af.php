<?php $__env->startSection('content'); ?>
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Register Company/NGO/Bank</h1>
    <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
      <?php endif; ?>
            <form action="<?php echo e(route('superadmin.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Company Name" value="<?php echo e(old('name')); ?>" requried>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" value="<?php echo e(old('phone')); ?>" requried>
                  </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo e(old('email')); ?>" requried>
                </div>
                <div class="mb-3" style="position: relative">
                  <label  class="form-label">Password</label>

                  <input type="password" name="password" id="password" class="form-control" value="<?php echo e(old('password')); ?>" placeholder="Enter Password" requried>
                  <small><span style="color: black">Password Hints:</span> <span class="text-danger">(A-Z), (a-z), (0-9), (!@%#$^@&*)</span></small>
                    <i class="fas fa-eye-slash fa-eye" id="eye" ></i>

                </div>
                <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input type="text" name="adress" class="form-control" placeholder="Enter Your Address" value="<?php echo e(old('adress')); ?>" requried>
                  </div>
                  <div class="mb-3">
                  <select class="form-control" name="role_1" >

                    <option>Company</option>
                    <option>NGO</option>
                    <option>Bank</option>
                    <option>MFI</option>

                  </select>
                </div>
                <button type="submit" class="btn btn-primary" style="background: #086343">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/superadmin/reg.blade.php ENDPATH**/ ?>
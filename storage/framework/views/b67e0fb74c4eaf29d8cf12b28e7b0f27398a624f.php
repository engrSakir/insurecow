<?php $__env->startSection('content'); ?>
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center"><u> Register Field Agent</u></h1>
    <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </ul>
          </div>
      <?php endif; ?>
            <form action="<?php echo e(route('company.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" value="<?php echo e(old('name')); ?>" required>
                  </div>
                  

                  <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" value="<?php echo e(old('phone')); ?>" required>
                  </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo e(old('email')); ?>" required>
                </div>

                <div class="mb-3" style="position: relative">
                  <label  class="form-label">Password</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password" value="<?php echo e(old('password')); ?>" required>
                    <i class="fas fa-eye-slash fa-eye" id="eye" ></i>

                </div>
                <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input type="text" name="adress" class="form-control" placeholder="Enter Your Address" value="<?php echo e(old('adress')); ?>" required>
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Employee ID</label>
                    <input type="text" name="agent_employee_id" class="form-control" placeholder="Enter Your Employee ID" value="<?php echo e(old('agent_employee_id')); ?>" required>
                  </div>
                  <div class="mb-3">
                    <select class="form-control" name="role_1" >

                      <option>Field Agent</option>


                    </select>
                  </div>

                <button type="submit" class="btn   text-white" style="background-color:#086343 ">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/reg.blade.php ENDPATH**/ ?>
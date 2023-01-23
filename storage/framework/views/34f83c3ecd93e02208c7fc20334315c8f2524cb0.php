<?php $__env->startSection('content'); ?>
    <h1 class="h3 mb-4 text-gray-800 text-center">View Package</h1>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Package Name</th>
                    <th>Price Range</th>
                    <th>Insurance Period</th>
                    <th>Coverage</th>
                    <th>Premium Amount</th>
                    <th>Lowest Amount</th>
                    <th>Highest Amount</th>

                    <th>Action</th>


                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr align="center">
                        <td><?php echo e($shows->name); ?></td>
                        <td><?php echo e($shows->price_range); ?></td>
                        <td><?php echo e($shows->insurance_period); ?></td>
                        <td><?php echo e($shows->coverage); ?></td>
                        <td><?php echo e($shows->premium_amount); ?></td>
                        <td><?php echo e($shows->lowest); ?></td>
                        <td><?php echo e($shows->highest); ?></td>



                        <td class="col-md-2">
                            <a href="<?php echo e(route('package.edit',$shows->id)); ?>" class="btn text-white" style="background: #086343;"><i class="fa fa-edit " aria-hidden="true"></i></a>

                            <a href="<?php echo e(route('company.deletePackage',$shows->id)); ?>"  class="btn btn-danger" onclick="confirmation(event)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/view_package.blade.php ENDPATH**/ ?>
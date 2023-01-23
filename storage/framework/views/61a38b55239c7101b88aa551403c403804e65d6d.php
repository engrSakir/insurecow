<?php $__env->startSection('content'); ?>

    <h1 class="h3 mb-4 text-gray-800 text-center"> Pending Quotation List</h1>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Buying Price</th>
                    <th>Insurance period</th>
                    <th>Accidental Mortality</th>

                    <th>Status</th>
                    <th>Action</th>


                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr align="center" >
                        <td><?php echo e($shows->buying_price); ?></td>
                        <td><?php echo e($shows->insurance_period); ?></td>
                        <td><?php echo e($shows->accidental_mortality); ?></td>

                        <td><?php echo e($shows->status); ?></td>

                        <td>
                            <a href="<?php echo e(route('company.approved',$shows->id)); ?>" class="btn text-white" style="background-color: #0f6848;
                            px"><i class="fa fa-check" ></i></a>

                            <a href="<?php echo e(route('company.canceled',$shows->id)); ?>"  class="btn btn-danger" style=""><i class="fa fa-times"></i></a>
                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/pending_quotation.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    <div style="padding: 20px">
        <?php echo $quotation->contents; ?>

    </div>

<div style="padding: 20px">
    <table class="table table-bordered border-white" style="border:1px;">
        <thead>
        <tr align="center">

            <th>Risk</th>
            <th>Premium Rate</th>
            <th>Premium on BDT</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = json_decode($quotation->risk); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quots): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr align="center">

            <td ><?php echo e($quots->risk); ?></td>
            <td><?php echo e($quots->premium); ?></td>
            <td><?php echo e($quots->bdt); ?> Tk</td>



        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tbody>
        <tr align="center">

            <th>Net Premium</th>
            <td></td>
            <td><?php echo e($quotation->net_premium); ?> Tk</td>
        </tr>
        <tr align="center">

            <th>Vat</th>
            <td><?php echo e($quotation->vat); ?>%</td>
            <td><?php echo e($quotation->vats); ?> Tk</td>
        </tr>

        <tr align="center">

            <th>Total Payable</th>
            <td>=</td>
            <td><?php echo e($quotation->total); ?> Tk</td>
        </tr>


        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/quotation_view.blade.php ENDPATH**/ ?>
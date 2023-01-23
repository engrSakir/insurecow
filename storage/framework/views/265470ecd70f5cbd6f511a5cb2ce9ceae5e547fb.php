<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/form_page.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h2 class="text-center mt-3"><b>Expenses</b></h2>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success alert-block">
                
                    <?php echo e($message); ?>

            </div>
        <?php endif; ?>
        <?php if($message = Session::get('notification')): ?>
            <div class="alert alert-success alert-block">
                
                    <?php echo e($message); ?>

            </div>
        <?php endif; ?>
        <div class="col-lg-4">
        <form class="<?php echo e(route('farmer.expense.save')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>        
            <div class="card p-5" style="background: rgba(79, 172, 35, 0.25);">
                    <div class="form-group">
                        <label for="date">Enter Date:</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="date" id="datepicker" placeholder="01/02/2023" value="<?php echo e(old('date')); ?>" readonly>
                        <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="cattle_id">Select Cattle:</label>
                        <select name="cattle_id" class="form-control custom-select <?php $__errorArgs = ['cattle_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cattle_id" value="<?php echo e(old('cattle_id')); ?>">
                            <option value="">SELECT CATTLE</option>
                            <?php $__currentLoopData = $cattle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->cattle_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['cattle_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="amount">Enter Cost Amount:</label>
                        <input type="number" class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="amount" placeholder="Enter Cost Amount" value="<?php echo e(old('amount')); ?>">
                        <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="cost_note">Purpose of Cost:</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['cost_note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cost_note" placeholder="Purpose of Cost:" value="<?php echo e(old('cost_note')); ?>">
                        <?php $__errorArgs = ['cost_note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-bordered">
            <a href="<?php echo e(route('expense.history')); ?>" class="btn text-white float-end mb-3" style="background: #086343;">Back to Expense History</a>
            <tbody>
                <?php $__currentLoopData = $expense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($expense)>0): ?>
                    <tr>
                        <td class="p-5">
                                <strong>Cattle Name </strong><br><?php echo e($exp->cattle->cattle_color); ?>

                        </td>
                        <td class="p-5">
                            <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">
                                <strong>Price </strong><br><?php echo e($exp->cattle->price); ?>

                            </div>
                        </td>
                        <td class="p-5">
                        <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">
                            <strong>Expense </strong><br><?php echo e($exp->amount); ?>

                        </div>
                        </td>
                        <td class="p-5">
                        <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">    
                            <strong>Total </strong><br><?php echo e((float)$exp->cattle->price + (float)$exp->amount); ?>

                        </div>
                        </td>
                        <td class="p-5">
                        <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">    
                            <div class="btn-group">
                            <a href="<?php echo e(route('expenses.edit', $exp->id)); ?>" class="btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <!-- <a href="<?php echo e(route('expense.destroy', $exp->id)); ?>" class="btn-sm btn-danger delete-expense" onclick="alert('Are you sure to delete.')"><i class="fa fa-trash"></i></a> -->
                            <form method="POST" action="<?php echo e(route('expense.destroy', $exp->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger show_confirm" title='Delete'><i class="fa fa-trash"></i></button>
                            </form>
                            </div>
                        </div>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td>No Reports Found</td>    
                    </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
        </div>
    </div>    
</div>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/expense.blade.php ENDPATH**/ ?>
<?php $__env->startSection('tableName', __('Years Of Experience')); ?>
<?php $__env->startSection('searchOptions'); ?>
    <option value="en_name"><?php echo e(__('English Name')); ?></option>
    <option value="ar_name"><?php echo e(__('Arabic Name')); ?></option>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('createButton'); ?>
    <button type="button" class="justify-content-left btn btn-outline-success w-100 mt-2" data-bs-toggle="modal"
        data-bs-target="#CreateModal"><i class="bi bi-plus-square"></i></button>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-head-names'); ?>
    <th><?php echo e(__('English Name')); ?></th>
    <th><?php echo e(__('Arabic Name')); ?></th>
    <th><?php echo e(__('Action')); ?></th>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-body'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $YOE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tbody>
            <tr>
                <td><?php echo e($data->en_name); ?>

                </td>
                <td><?php echo e($data->ar_name); ?>

                </td>
                <td>
                    <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#editModal" wire:click.prevent="edit(<?php echo e($data->YOE_id); ?>)"><i
                            class="bi bi-pen"></i></button>
                </td>
            </tr>
        </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i><?php echo e(__('Empty')); ?> <button type="button" class="btn btn-outline-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#CreateModal"><i class="bi bi-plus-square"></i></button></i>
                </h5>
            </td>
        </tr>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('create-model-body'); ?>
    <?php if(Session()->has('WrongYearsOfExperience')): ?>
        <div class="alert alert-danger">
            <?php echo e(Session('WrongYearsOfExperience')); ?>

        </div>
    <?php endif; ?>
    <?php if(!Session()->has('WrongYearsOfExperience')): ?>
        <div class="card-body">
            <form autocomplete="off" method="POST">
                <?php echo csrf_field(); ?>
                <div class="results">
                    <?php if(Session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session('message')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="en_name" autocomplete="off"
                                wire:model="en_name" />
                            <label for="inputen_name"><?php echo e(__('English Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['en_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="ar_name" autocomplete="off"
                                wire:model="ar_name" />
                            <label for="inputar_name"><?php echo e(__('Arabic Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['ar_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('edit-model-body'); ?>
    <?php if(Session()->has('WrongYearsOfExperience')): ?>
        <div class="alert alert-danger">
            <?php echo e(Session('WrongYearsOfExperience')); ?>

        </div>
    <?php endif; ?>
    <?php if(!Session()->has('WrongYearsOfExperience')): ?>
        <div class="card-body">
            <form autocomplete="off" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="YOE_id" wire:model="YOE_id">
                <div class="results">
                    <?php if(Session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session('message')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="en_name" autocomplete="off"
                                wire:model="en_name" />
                            <label for="inputen_name"><?php echo e(__('English Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['en_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="ar_name" autocomplete="off"
                                wire:model="ar_name" />
                            <label for="inputar_name"><?php echo e(__('Arabic Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['ar_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('linksOfPaganation'); ?>
    <?php echo $YOE->links(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.livewireLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/dashboard/years-of-experience/index.blade.php ENDPATH**/ ?>
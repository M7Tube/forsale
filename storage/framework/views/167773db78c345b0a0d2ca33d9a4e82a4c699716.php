<?php $__env->startSection('tableName', __('Users')); ?>
<?php $__env->startSection('searchOptions'); ?>
    <option value="first_name"><?php echo e(__('First Name')); ?></option>
    <option value="last_name"><?php echo e(__('Last Name')); ?></option>
    <option value="phone_number"><?php echo e(__('Phone Number')); ?></option>
    <option value="email"><?php echo e(__('Email')); ?></option>
    <option value="is_personal"><?php echo e(__('Account Type')); ?></option>
    <option value="birth_date"><?php echo e(__('Birth Date')); ?></option>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-head-names'); ?>
    <th><?php echo e(__('First Name')); ?></th>
    <th><?php echo e(__('Last Name')); ?></th>
    <th><?php echo e(__('Phone Number')); ?></th>
    <th><?php echo e(__('Email')); ?></th>
    <th><?php echo e(__('Admin Account')); ?></th>
    <th><?php echo e(__('Personal Account')); ?></th>
    <th><?php echo e(__('Birth Date')); ?></th>
    <th><?php echo e(__('Action')); ?></th>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-body'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tbody>
            <tr>
                <td><?php echo e($data->first_name ?? ''); ?>

                </td>
                <td><?php echo e($data->last_name ?? ''); ?>

                </td>
                <td><?php echo e($data->phone_number ?? ''); ?>

                </td>
                <td><?php echo e($data->email ?? ''); ?>

                </td>
                <?php if($data->is_admin == 1): ?>
                    <td><?php echo e(__('Yes') ?? ''); ?>

                    </td>
                <?php else: ?>
                    <td><?php echo e(__('No') ?? ''); ?>

                    </td>
                <?php endif; ?>
                <?php if($data->is_personal == 1): ?>
                    <td><?php echo e(__('Yes') ?? ''); ?>

                    </td>
                <?php else: ?>
                    <td><?php echo e(__('No') ?? ''); ?>

                    </td>
                <?php endif; ?>
                <td><?php echo e($data->birth_date ?? ''); ?>

                </td>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_users')): ?>
                    <td>
                        <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" wire:click.prevent="edit(<?php echo e($data->user_id); ?>)"><i
                                class="bi bi-pen"></i></button>
                    </td>
                <?php endif; ?>
            </tr>
        </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i><?php echo e(__('Empty')); ?> <button type="button" class="btn btn-outline-success mb-2"
                            data-bs-toggle="modal" data-bs-target="#CreateModal"><i
                                class="bi bi-plus-square"></i></button></i>
                </h5>
            </td>
        </tr>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('create-model-body'); ?>
    <?php if(Session()->has('WrongUser')): ?>
        <div class="alert alert-danger">
            <?php echo e(Session('WrongUser')); ?>

        </div>
    <?php endif; ?>
    <?php if(!Session()->has('WrongUser')): ?>
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
                            <input class="form-control" id="inputname" type="text" name="first_name" autocomplete="off"
                                wire:model="first_name" />
                            <label for="inputfirst_name"><?php echo e(__('First Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['first_name'];
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
                            <input class="form-control" id="inputname" type="text" name="last_name" autocomplete="off"
                                wire:model="last_name" />
                            <label for="inputlast_name"><?php echo e(__('Last Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['last_name'];
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
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="phone_number" autocomplete="off"
                                wire:model="phone_number" />
                            <label for="inputphone_number"><?php echo e(__('Phone Number')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['phone_number'];
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
                            <input class="form-control" id="inputname" type="text" name="email" autocomplete="off"
                                wire:model="email" />
                            <label for="inputemail"><?php echo e(__('Email')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['email'];
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
                            <select class="form-control" name="is_personal" wire:model="is_personal" id="">
                                <option value="0"><?php echo e(__('No')); ?></option>
                                <option value="1"><?php echo e(__('Yes')); ?></option>
                            </select>
                            <label for="inputemail"><?php echo e(__('Account Type')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['is_personal'];
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
    <?php if(Session()->has('WrongUser')): ?>
        <div class="alert alert-danger">
            <?php echo e(Session('WrongUser')); ?>

        </div>
    <?php endif; ?>
    <?php if(!Session()->has('WrongUser')): ?>
        <div class="card-body">
            <form autocomplete="off" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="user_id" wire:model="user_id">
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
                            <input class="form-control" id="inputname" type="text" name="first_name" autocomplete="off"
                                wire:model="first_name" />
                            <label for="inputfirst_name"><?php echo e(__('First Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['first_name'];
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
                            <input class="form-control" id="inputname" type="text" name="last_name"
                                autocomplete="off" wire:model="last_name" />
                            <label for="inputlast_name"><?php echo e(__('Last Name')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['last_name'];
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
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="phone_number"
                                autocomplete="off" wire:model="phone_number" />
                            <label for="inputphone_number"><?php echo e(__('Phone Number')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['phone_number'];
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
                            <input class="form-control" id="inputname" type="text" name="email" autocomplete="off"
                                wire:model="email" />
                            <label for="inputemail"><?php echo e(__('Email')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['email'];
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
                            <select class="form-control" name="is_personal" wire:model="is_personal" id="">
                                <option value="0"><?php echo e(__('No')); ?></option>
                                <option value="1"><?php echo e(__('Yes')); ?></option>
                            </select>
                            <label for="inputemail"><?php echo e(__('Account Type')); ?>

                            </label>
                            <span class="text-danger">
                                <?php $__errorArgs = ['is_personal'];
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
    <?php echo $Users->links(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.livewireLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/dashboard/users/index.blade.php ENDPATH**/ ?>
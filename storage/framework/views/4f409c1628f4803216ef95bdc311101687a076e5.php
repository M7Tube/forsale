<div class="container my-5">
    <div class="">
        <h4 style="color: #1F1F39;"><b><?php echo e(__('Register')); ?></b></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mt-3">
                <div class="col-12">
                    <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                        <div class="card-content">
                            <div class="card-body">
                                <form wire:submit.prevent="create">
                                    <div class="m-5">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="first_name"><?php echo e(__('First Name')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputfirst_name" type="text"
                                                        autocomplete="off" wire:model="first_name" />
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
                                            <div class="col-12 col-md-6">
                                                <label for="last_name"><?php echo e(__('Last Name')); ?></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputlast_name" type="text"
                                                        autocomplete="off" wire:model="last_name" />
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
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="email"><?php echo e(__('Email')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputemail" type="text"
                                                        autocomplete="off" wire:model="email" />
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
                                            <div class="col-12 col-md-6">
                                                <label for="phone_number"><?php echo e(__('Phone Number')); ?></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputphone_number" type="text"
                                                        autocomplete="off" wire:model="phone_number" />
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
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="password"><?php echo e(__('Password')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputpassword" type="password"
                                                        autocomplete="off" wire:model="password" />
                                                    <span class="text-danger">
                                                        <?php $__errorArgs = ['password'];
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
                                            <div class="col-12 col-md-6">
                                                <label for="password_confirmation"><?php echo e(__('Password Confirmation')); ?>

                                                    <span class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputpassword_confirmation"
                                                        type="password" autocomplete="off"
                                                        wire:model="password_confirmation" />
                                                    <span class="text-danger">
                                                        <?php $__errorArgs = ['password_confirmation'];
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
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <label for="birth_date"><?php echo e(__('Birth Date')); ?></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputbirth_date" type="date"
                                                        autocomplete="off" wire:model="birth_date" />
                                                    <span class="text-danger">
                                                        <?php $__errorArgs = ['birth_date'];
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
                                            <div class="col-12 col-md-6">
                                                <label for="last_name"><?php echo e(__('Advertiser type')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic radio toggle button group">
                                                        <input type="radio" class="btn-check w-50"
                                                            wire:model="is_personal" id="is_personal1"
                                                            autocomplete="off" value="0" checked>
                                                        <label class="btn btn-outline-secondary"
                                                            for="is_personal1"><?php echo e(__('Personal')); ?>

                                                        </label>
                                                        <input type="radio" class="btn-check w-50"
                                                            wire:model="is_personal" id="is_personal2"
                                                            autocomplete="off" value="1">
                                                        <label class="btn btn-outline-secondary"
                                                            for="is_personal2"><?php echo e(__('Commercial')); ?>

                                                        </label>
                                                    </div>
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
                                    </div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <button type="submit"
                                            class="mt-3 btn btn-dark w-50"><?php echo e(__('Register')); ?></button><br />
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <h6><?php echo e(__('Do You Have An Account?')); ?></h6><br />
                                        <h6><a
                                                href="<?php echo e(route('website.login', app()->getLocale())); ?>"><u><?php echo e(__('Login')); ?></u></a>
                                        </h6><br />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/website/register.blade.php ENDPATH**/ ?>
<div id="app">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    
                    <div class="col-lg-8">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4"><?php echo e(__('Create New Admin')); ?> <i
                                        class="bi bi-person-plus-fill"></i></h3>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="create">
                                    <?php echo csrf_field(); ?>
                                    <div class="results">
                                        <?php if(Session::get('fail')): ?>
                                            <div class="alert alert-danger">
                                                <?php echo e(Session::get('fail')); ?>

                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="results">
                                        <?php if(Session::get('success')): ?>
                                            <div class="alert alert-success">
                                                <?php echo e(Session::get('success')); ?>

                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputfirst_name" type="text"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="first_name" />
                                                <label for="inputfirst_name"><?php echo e(__('First Name')); ?> <span
                                                        class="text-danger">*</span></label>
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
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputlast_name" type="text"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="last_name" />
                                                <label for="inputlast_name"><?php echo e(__('Last Name')); ?> </label>
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
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputphone_number" type="text"
                                                    placeholder="Mahmoud" autocomplete="off"
                                                    wire:model="phone_number" />
                                                <label for="inputphone_number"><?php echo e(__('Phone Number')); ?> <span
                                                        class="text-danger">*</span></label>
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
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputemail" type="text"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="email" />
                                                <label for="inputemail"><?php echo e(__('Email')); ?> <i
                                                        class="bi bi-envelope-fill"></i> <span
                                                        class="text-danger">*</span></label>
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
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputpassword" type="password"
                                                    autocomplete="off" wire:model="password" />
                                                <label for="inputpassword"><?php echo e(__('Password')); ?><span
                                                        class="text-danger">*</span>
                                                    <i class="bi bi-key-fill"></i></label>
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
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputpassword_confirmation"
                                                    type="password" autocomplete="off"
                                                    wire:model="password_confirmation" />
                                                <label
                                                    for="inputpassword_confirmation"><?php echo e(__('Confirm Password')); ?><span
                                                        class="text-danger">*</span> <i
                                                        class="bi bi-key-fill"></i></label>
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
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-1">
                                                <input class="form-control" id="inputbirth_date" type="date"
                                                    placeholder="Mahmoud" autocomplete="off" wire:model="birth_date" />
                                                <label for="inputbirth_date"><?php echo e(__('Birth Date')); ?></label>
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
                                    </div>
                                    <hr>
                                    <input class="form-check-input" type="checkbox" wire:model="select_all"
                                        id="chkall"
                                        >
                                    <label class="form-check-label" for="chkall">
                                        <?php echo e($select_all == false ? __('Check All') : __('UnCheck All')); ?>

                                    </label>
                                    <div class="row">
                                        <?php $__currentLoopData = $allPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="accordion" id="accordionExample<?php echo e($key); ?>">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header"
                                                            id="headingOne<?php echo e($key); ?>">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne<?php echo e($key); ?>"
                                                                aria-expanded="true"
                                                                aria-controls="collapseOne<?php echo e($key); ?>">
                                                                <?php echo e(__($p)); ?>

                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne<?php echo e($key); ?>"
                                                            class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne<?php echo e($key); ?>"
                                                            data-bs-parent="#accordionExample<?php echo e($key); ?>">
                                                            <div class="accordion-body">
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="create_<?php echo e($p); ?>"
                                                                        id="flexCheckDefaultC<?php echo e($key); ?>">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefaultC<?php echo e($key); ?>">
                                                                        <?php echo e(__('Create')); ?>

                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="read_<?php echo e($p); ?>"
                                                                        id="flexCheckCheckedR<?php echo e($key); ?>">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckCheckedR<?php echo e($key); ?>">
                                                                        <?php echo e(__('Read')); ?>

                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="delete_<?php echo e($p); ?>"
                                                                        id="flexCheckCheckedD<?php echo e($key); ?>">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckCheckedD<?php echo e($key); ?>">
                                                                        <?php echo e(__('Delete')); ?>

                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input wire:model="permission"
                                                                        class="form-check-input" type="checkbox"
                                                                        value="edit_<?php echo e($p); ?>"
                                                                        id="flexCheckCheckedU<?php echo e($key); ?>">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckCheckedU<?php echo e($key); ?>">
                                                                        <?php echo e(__('Update')); ?>

                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <span class="text-danger">
                                            <?php $__errorArgs = ['permission'];
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
                                    <hr>
                                    <?php if(!$errors->any()): ?>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit"
                                                class="mx-auto w-100 btn btn-block btn-outline-success"><?php echo e(__('Create')); ?>

                                                <i class="bi bi-plus-square"></i></button>
                                        </div>
                                    <?php else: ?>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit"
                                                class="mx-auto w-100 btn btn-block btn-outline-success"
                                                disabled><?php echo e(__('Create')); ?>

                                                <i class="bi bi-plus-square"></i></button>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/auth/register.blade.php ENDPATH**/ ?>
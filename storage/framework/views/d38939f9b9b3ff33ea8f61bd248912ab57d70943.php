<div class="container my-5">
    <div class="">
        <h4 style="color: #1F1F39;"><b><?php echo e(__('Confirm Register')); ?></b></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mt-3">
                <div class="col-12">
                    <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                        <div class="card-content">
                            <div class="card-body">
                                <form wire:submit.prevent="confirm">
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
                                    <div class="m-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="code"><?php echo e(__('Code')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputcode" type="text"
                                                        autocomplete="off" wire:model="code" />
                                                    <span class="text-danger">
                                                        <?php $__errorArgs = ['code'];
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
                                            class="mt-3 btn btn-dark w-25"><?php echo e(__('Confirm')); ?></button><br />
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <h6><?php echo e(__('Do You Have An Account?')); ?></h6><br />
                                        <h6><a
                                                href="<?php echo e(route('website.login', app()->getLocale())); ?>"><?php echo e(__('Login')); ?></a>
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
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/website/confirm-register.blade.php ENDPATH**/ ?>
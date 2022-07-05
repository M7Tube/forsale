<div class="container-fluid my-5">
    <div class="mx-5">
        <h4 style="color: #1F1F39;"><b><?php echo e(__('Spcial Ad')); ?></b></h4>
    </div>
    <?php $__empty_1 = true; $__currentLoopData = $ad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="col-md-12 mx-5">
                    <div class="form-floating mt-3">
                        <div class="col-12">
                            <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-body">
                                            <img class="spcialAdImage" src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_exists('../storage/app/img/' . $data->picture) ? file_get_contents('../storage/app/img/' . $data->picture) : file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                width="100%" height="100%" alt="Spcial Ad Picture"
                                               >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row mx-5">
                    <div class="col-12">
                        <h4 style="color: #1F1F39;">
                            <b><?php echo e(app()->getLocale() == 'en' ? $data->en_title ?? '' : $data->ar_title ?? ''); ?></b>
                            <?php if($data->is_golden == 1): ?>
                                <i class="text-warning bi bi-star"></i>
                            <?php else: ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="col-12">
                        <p style="color: #1F1F39;">
                            <?php echo e(app()->getLocale() == 'en' ? $data->en_desc ?? '' : $data->ar_desc ?? ''); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h4 class="text-center text-muted mt-5"><?php echo e(__('This Ad is Not Available ')); ?><i class="bi bi-emoji-dizzy"></i></h4>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/website/spcial-ad.blade.php ENDPATH**/ ?>
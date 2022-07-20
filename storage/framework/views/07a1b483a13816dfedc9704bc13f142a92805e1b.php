<div>
    <h4 class="p-3"><?php echo e(__('My Favorite')); ?></h4>
    <div class="d-flex justify-content-center">
        <div wire:loading>

            <div class="lds-roller mx-auto">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
        <?php if($data): ?>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($ad->car_id): ?>
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car->car_id])); ?>"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge"><?php echo e($ad->car->price ?? 0); ?>

                                        <?php echo e(__('SYP')); ?></span>
                                    <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->car->picture))[0])): ?>
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->car->picture))[0])); ?>"
                                            alt="Alternate Text" />
                                    <?php else: ?>
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                            alt="Alternate Text" />
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <span><?php echo e(app()->getLocale() == 'ar' ? $ad->car->ar_title ?? $ad->car->en_title : $ad->car->en_title ?? $ad->car->ar_title); ?></span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    <?php if(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays() . __(' Days')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInHours() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInMinutes() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInSeconds() >= 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->car->created_at)->addDays(\Carbon\Carbon::parse($ad->car->created_at)->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->car->governorate->ar_name ?? '' : $ad->car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php elseif($ad->real_estate_id): ?>
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $ad->real_estate->real_estate_id])); ?>"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge"><?php echo e($ad->real_estate->price ?? 0); ?>

                                        <?php echo e(__('SYP')); ?></span>
                                    <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->real_estate->picture))[0])): ?>
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->real_estate->picture))[0])); ?>"
                                            alt="Alternate Text" />
                                    <?php else: ?>
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                            alt="Alternate Text" />
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <span><?php echo e(app()->getLocale() == 'ar' ? $ad->real_estate->ar_title ?? $ad->real_estate->en_title : $ad->real_estate->en_title ?? $ad->real_estate->ar_title); ?></span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    <?php if(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays() . __(' Days')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInHours() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInMinutes() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInSeconds() >= 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->real_estate->created_at)->addDays(\Carbon\Carbon::parse($ad->real_estate->created_at)->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->real_estate->governorate->ar_name ?? '' : $ad->real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php elseif($ad->job_id): ?>
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $ad->job->job_id])); ?>"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge"><?php echo e($ad->job->salary ?? 0); ?>

                                        <?php echo e(__('SYP')); ?></span>
                                    <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->job->picture))[0])): ?>
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->job->picture))[0])); ?>"
                                            alt="Alternate Text" />
                                    <?php else: ?>
                                        <img class="img-fluid img"
                                            src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                            alt="Alternate Text" />
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <span><?php echo e(app()->getLocale() == 'ar' ? $ad->job->ar_title ?? $ad->job->en_title : $ad->job->en_title ?? $ad->job->ar_title); ?></span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    <?php if(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays() . __(' Days')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInHours() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInMinutes() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInSeconds() >= 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($ad->job->created_at)->addDays(\Carbon\Carbon::parse($ad->job->created_at)->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $ad->job->governorate->ar_name ?? '' : $ad->job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
            <?php endif; ?>
            <?php echo e($data->links()); ?>

        <?php else: ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/website/my-favorite.blade.php ENDPATH**/ ?>
<div>
    <h4 class="p-3"><?php echo e(__('My Ads')); ?></h4>
    <div class="container text-center mb-2">
        <div class="row card p-3 bg-white rounded-lg border-0 ">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check w-100" wire:model="manger_accept" id="manger_accept1"
                    autocomplete="off" value="2" checked>
                <label class="mx-1 btn btn-outline-dark" for="manger_accept1"><?php echo e(__('Accepted')); ?>

                </label>
                <input type="radio" class="btn-check w-100" wire:model="manger_accept" id="manger_accept2"
                    autocomplete="off" value="1">
                <label class="mx-1 btn btn-outline-dark" for="manger_accept2"><?php echo e(__('Need Approvoel')); ?>

                </label>
                <input type="radio" class="btn-check w-100" wire:model="manger_accept" id="manger_accept3"
                    autocomplete="off" value="0">
                <label class="mx-1 btn btn-outline-dark" for="manger_accept3"><?php echo e(__('Rejected')); ?>

                </label>
            </div>
        </div>
    </div>
    <div class="container text-center mb-2">
        <div class="row card p-3 bg-white rounded-lg border-0 ">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check w-100" wire:model="category" id="category1" autocomplete="off"
                    value="App\Models\Cars" checked>
                <label class="mx-1 btn btn-outline-dark" for="category1"><?php echo e(__('Cars')); ?>

                </label>
                <input type="radio" class="btn-check w-100" wire:model="category" id="category2" autocomplete="off"
                    value="App\Models\RealEstate">
                <label class="mx-1 btn btn-outline-dark" for="category2"><?php echo e(__('Real Estate')); ?>

                </label>
                <input type="radio" class="btn-check w-100" wire:model="category" id="category3" autocomplete="off"
                    value="App\Models\Jobs">
                <label class="mx-1 btn btn-outline-dark" for="category3"><?php echo e(__('Jobs')); ?>

                </label>
            </div>
        </div>
    </div>
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
    <hr>
    <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
        <?php if($data): ?>
            <?php if($data['cars']): ?>
                <h4><?php echo e(__('Cars Ads')); ?></h4>
                <?php $__empty_1 = true; $__currentLoopData = $data['cars']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $car->car_id])); ?>"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge"><?php echo e($car->price ?? 0); ?>

                                        <?php echo e(__('SYP')); ?></span>
                                    <img class="img-fluid img"
                                        src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_exists('../storage/app/img/' . array_values(json_decode($car->picture))[0]) ? file_get_contents('../storage/app/img/' . array_values(json_decode($car->picture))[0]) : file_get_contents('../storage/app/img/defualt.png')); ?>"
                                        alt="Alternate Text" />
                                </div>
                                <div class="card-body">
                                    <span><?php echo e(app()->getLocale() == 'ar' ? $car->ar_title ?? $car->en_title : $car->en_title ?? $car->ar_title); ?></span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    <?php if(\Carbon\Carbon::parse($car->created_at)->diffInDays() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($car->created_at)->diffInDays() . __(' Days')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInHours() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInMinutes() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInSeconds() >= 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($car->created_at)->addDays(\Carbon\Carbon::parse($car->created_at)->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $car->governorate->ar_name ?? '' : $car->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo e($data['cars']->links()); ?>

                </div>
            <?php endif; ?>
            <?php if($data['real_estate']): ?>
                <h4><?php echo e(__('Real Estate Ads')); ?></h4>
                <?php $__empty_1 = true; $__currentLoopData = $data['real_estate']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $real_estate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $real_estate->real_estate_id])); ?>"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge"><?php echo e($real_estate->price ?? 0); ?>

                                        <?php echo e(__('SYP')); ?></span>
                                    <img class="img-fluid img"
                                        src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_exists('../storage/app/img/' . array_values(json_decode($real_estate->picture))[0]) ? file_get_contents('../storage/app/img/' . array_values(json_decode($real_estate->picture))[0]) : file_get_contents('../storage/app/img/defualt.png')); ?>"
                                        alt="Alternate Text" />
                                </div>
                                <div class="card-body">
                                    <span><?php echo e(app()->getLocale() == 'ar' ? $real_estate->ar_title ?? $real_estate->en_title : $real_estate->en_title ?? $real_estate->ar_title); ?></span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    <?php if(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays() . __(' Days')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInHours() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInMinutes() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInSeconds() >= 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($real_estate->created_at)->addDays(\Carbon\Carbon::parse($real_estate->created_at)->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $real_estate->governorate->ar_name ?? '' : $real_estate->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo e($data['real_estate']->links()); ?>

                </div>
            <?php endif; ?>
            <?php if($data['jobs']): ?>
                <h4><?php echo e(__('Jobs Ads')); ?></h4>
                <?php $__empty_1 = true; $__currentLoopData = $data['jobs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-6 col-sm-4 col-md-3 mb-5">
                        <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $job->job_id])); ?>"
                            style="text-decoration: none; color:black;">
                            <div class="card">
                                <div class="card-image">
                                    <span class="card-notify-badge"><?php echo e($job->salary ?? 0); ?>

                                        <?php echo e(__('SYP')); ?></span>
                                    <img class="img-fluid img"
                                        src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_exists('../storage/app/img/' . array_values(json_decode($job->picture))[0]) ? file_get_contents('../storage/app/img/' . array_values(json_decode($job->picture))[0]) : file_get_contents('../storage/app/img/defualt.png')); ?>"
                                        alt="Alternate Text" />
                                </div>
                                <div class="card-body">
                                    <span><?php echo e(app()->getLocale() == 'ar' ? $job->ar_title ?? $job->en_title : $job->en_title ?? $job->ar_title); ?></span>
                                </div>
                                <div class="card-image-overlay p-1">
                                    <?php if(\Carbon\Carbon::parse($job->created_at)->diffInDays() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($job->created_at)->diffInDays() . __(' Days')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInHours() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInMinutes() > 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php elseif(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInSeconds() >= 0): ?>
                                        <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($job->created_at)->addDays(\Carbon\Carbon::parse($job->created_at)->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                            | <i class="bi bi-geo-alt-fill"></i>
                                            <?php echo e(app()->getLocale() == 'ar' ? $job->governorate->ar_name ?? '' : $job->governorate->en_name ?? ''); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo e($data['jobs']->links()); ?>

                </div>
            <?php endif; ?>
        <?php else: ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/website/my-ads.blade.php ENDPATH**/ ?>
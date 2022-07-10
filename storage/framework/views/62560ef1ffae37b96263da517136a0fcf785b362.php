<div>
    <h4 class="p-3 text-center"><?php echo e(__('Ads Need Approval')); ?></h4>
    
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
                                        src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(
                                            file_exists('../storage/app/img/' . array_values(json_decode($car->picture))[0])
                                                ? file_get_contents('../storage/app/img/' . array_values(json_decode($car->picture))[0])
                                                : file_get_contents('../storage/app/img/defualt.png'),
                                        ); ?>"
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
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-block w-50 mt-2 btn-outline-dark mx-1"
                                wire:click.prevent="accept(1,<?php echo e($car->car_id); ?>)"><?php echo e(__('Accept')); ?></button>
                            <button class="btn btn-block w-50 mt-2 btn-outline-danger mx-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><?php echo e(__('Reject')); ?></button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <?php echo e(__('Rejected Reason')); ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <textarea wire:model="rejected_reason" id="" cols="30" rows="10" class="form-control"
                                                placeholder="<?php echo e(__('Rejected Reason')); ?>"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                            <button type="button" class="btn btn-outline-danger"
                                                wire:click.prevent="reject(1,<?php echo e($car->car_id); ?>)"><?php echo e(__('Reject')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
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
                                        src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(
                                            file_exists('../storage/app/img/' . array_values(json_decode($real_estate->picture))[0])
                                                ? file_get_contents('../storage/app/img/' . array_values(json_decode($real_estate->picture))[0])
                                                : file_get_contents('../storage/app/img/defualt.png'),
                                        ); ?>"
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
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-block w-50 mt-2 btn-outline-dark mx-1"
                                wire:click.prevent="accept(2,<?php echo e($real_estate->real_estate_id); ?>)"><?php echo e(__('Accept')); ?></button>
                            <button class="btn btn-block w-50 mt-2 btn-outline-danger mx-1"
                                wire:click.prevent="reject(2,<?php echo e($real_estate->real_estate_id); ?>)"><?php echo e(__('Reject')); ?></button>
                        </div>
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
                                        src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(
                                            file_exists('../storage/app/img/' . array_values(json_decode($job->picture))[0])
                                                ? file_get_contents('../storage/app/img/' . array_values(json_decode($job->picture))[0])
                                                : file_get_contents('../storage/app/img/defualt.png'),
                                        ); ?>"
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
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-block w-50 mt-2 btn-outline-dark mx-1"
                                wire:click.prevent="accept(3,<?php echo e($job->job_id); ?>)"><?php echo e(__('Accept')); ?></button>
                            <button class="btn btn-block w-50 mt-2 btn-outline-danger mx-1"
                                wire:click.prevent="reject(3,<?php echo e($job->job_id); ?>)"><?php echo e(__('Reject')); ?></button>
                        </div>
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
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/dashboard/all-ads/accept-ads.blade.php ENDPATH**/ ?>
<?php $__env->startSection('tableName', __('Cars')); ?>
<?php $__env->startSection('searchOptions'); ?>
    <option value="ar_title"><?php echo e(__('Arabic Title')); ?></option>
    <option value="en_title"><?php echo e(__('English Title')); ?></option>
    <option value="ar_desc"><?php echo e(__('Arabic Descriptions')); ?></option>
    <option value="en_desc"><?php echo e(__('English Descriptions')); ?></option>
    <option value="phone_number"><?php echo e(__('Phone Number')); ?></option>
    <option value="manger_accept"><?php echo e(__('Manger Accept')); ?></option>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-head-names'); ?>
    <th><?php echo e(__('English Title')); ?></th>
    <th><?php echo e(__('Arabic Title')); ?></th>
    <th><?php echo e(__('English Descriptions')); ?></th>
    <th><?php echo e(__('Arabic Descriptions')); ?></th>
    <th><?php echo e(__('Phone Number')); ?></th>
    <th><?php echo e(__('Manger Accept')); ?></th>
    <th><?php echo e(__('Picture')); ?></th>
    <th><?php echo e(__('Ad Info')); ?></th>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-body'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $Cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tbody>
            <tr>
                <td><?php echo e($data->en_title ?? ''); ?>

                </td>
                <td><?php echo e($data->ar_title ?? ''); ?>

                </td>
                <td><?php echo e($data->en_desc ?? ''); ?>

                </td>
                <td><?php echo e($data->ar_desc ?? ''); ?>

                </td>
                <td><?php echo e($data->phone_number ?? ''); ?>

                </td>
                <?php if($data->manger_accept == 0): ?>
                    <td><?php echo e(__('Rejcted')); ?>

                    </td>
                <?php elseif($data->manger_accept == 1): ?>
                    <td><?php echo e(__('Need Approvoel')); ?>

                    </td>
                <?php elseif($data->manger_accept == 2): ?>
                    <td><?php echo e(__('Accepted')); ?>

                    </td>
                <?php endif; ?>
                <td>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#picModel">
                        <?php echo e(__('View Ad Pictures')); ?>

                    </button>
                </td>

                <td>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#InfoModel">
                        <?php echo e(__('Ad Info')); ?>

                    </button>
                </td>
                
            </tr>
        </tbody>

        <!-- Ad Picture Modal -->
        <div class="modal fade" id="picModel" tabindex="-1" aria-labelledby="picModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="picModelLabel"><?php echo e(__('Ad Pictures')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php $__currentLoopData = json_decode($data->picture); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>" alt="job picture"
                                    width="200px">
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ad Info Modal -->
        <div class="modal fade" id="InfoModel" tabindex="-1" aria-labelledby="InfoModelLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="InfoModelLabel"><?php echo e(__('Ad Pictures')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('is Phone Visable')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e($data->isPhone_visable == 1 ? __('Yes') : __('No') ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Kilometrag')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e($data->kilometrag ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Manufacturing Year')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e($data->manufacturing_year ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Price')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e($data->price ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Is Special')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e($data->is_special == 1 ? __('Yes') : __('No') ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Watch Count')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e($data->watch_count ?? 0); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('User')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(($data->User->first_name ?? '') . ' ' . ($data->User->last_name ?? '')); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Governorate')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->governorate->ar_name ?? '' : $data->governorate->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Car Type')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->CarType->ar_name ?? '' : $data->CarType->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Car Status')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->CarStatus->ar_name ?? '' : $data->CarStatus->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Rent Or Sale')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->RentOrSale->ar_name ?? '' : $data->RentOrSale->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Motion Vector')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->MotionVector->ar_name ?? '' : $data->MotionVector->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Country Of Manufacture')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->CountryOfManufacture->ar_name ?? '' : $data->CountryOfManufacture->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Continent Of Origin')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->ContinentOfOrigins->ar_name ?? '' : $data->ContinentOfOrigins->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Color')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->Color->ar_name ?? '' : $data->Color->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Rental Time')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->RentalTime->ar_rent_name ?? '' : $data->RentalTime->en_rent_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Ad Type')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->AdType->ar_name ?? '' : $data->AdType->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                            <div class="row">
                                <div class="col-6" style="color: #33333384;">
                                    <?php echo e(__('Ad Status')); ?></div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div class="col-6">
                                        <?php echo e(app()->getLocale() == 'ar' ? $data->AdStatus->ar_name ?? '' : $data->AdStatus->en_name ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('linksOfPaganation'); ?>
    <?php echo $Cars->links(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.livewireLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/dashboard/cars/index.blade.php ENDPATH**/ ?>
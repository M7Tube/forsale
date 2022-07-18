<?php $__env->startSection('tableName', __('Admin Ads')); ?>
<?php $__env->startSection('searchOptions'); ?>
    <option value="en_title"><?php echo e(__('English Title')); ?></option>
    <option value="ar_title"><?php echo e(__('Arabic Title')); ?></option>
    <option value="en_desc"><?php echo e(__('English Description')); ?></option>
    <option value="ar_desc"><?php echo e(__('Arabic Description')); ?></option>
    <option value="is_golden"><?php echo e(__('Golden Status')); ?></option>
    <option value="user_id"><?php echo e(__('User')); ?></option>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('createButton'); ?>
    <a href="<?php echo e(route('web.crud.create.spcialAd', app()->getLocale())); ?>"
        class="justify-content-left btn btn-outline-success w-100 mt-2"><i class="bi bi-plus-square"></i></a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-head-names'); ?>
    <th><?php echo e(__('English Title')); ?></th>
    <th><?php echo e(__('Arabic Title')); ?></th>
    <th><?php echo e(__('English Description')); ?></th>
    <th><?php echo e(__('Arabic Description')); ?></th>
    <th><?php echo e(__('Picture')); ?></th>
    <th><?php echo e(__('Golden Status')); ?></th>
    <th><?php echo e(__('User')); ?></th>
    <th><?php echo e(__('Action')); ?></th>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('table-body'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $SA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tbody>
            <tr>
                <td><?php echo e($data->en_title); ?>

                </td>
                <td><?php echo e($data->ar_title); ?>

                </td>
                <td><?php echo e($data->en_desc); ?>

                </td>
                <td><?php echo e($data->ar_desc); ?>

                </td>
                <td>
                    <?php if($data->picture): ?>
                        <a
                            href="<?php echo e(route('web.crud.edit.spcialadPicture', [app()->getLocale(), 'id' => $data->spcial_ad_id])); ?>"><img
                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $data->picture)); ?>" width="75px"
                                alt="Ad Picture"></a>
                    <?php else: ?>
                        <?php echo e(__('Empty')); ?>

                    <?php endif; ?>
                </td>
                <td>
                    <?php if($data->is_golden == 1): ?>
                        <span style="color: rgb(255, 204, 0)"><?php echo e(__('Golden')); ?></span>
                    <?php else: ?>
                        <span style="color: rgb(165, 165, 165)"><?php echo e(__('Normal')); ?></span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php echo e(__('Created By')); ?> <span
                        class="text-muted"><?php echo e($data->user->first_name ?? __('Empty')); ?></span>
                    <?php echo e(__('Email')); ?> <span class="text-muted"><?php echo e($data->user->email ?? __('Empty')); ?></span>
                </td>
                <td>
                    <a href="<?php echo e(route('web.crud.edit.spcialAd', ['id' => $data->spcial_ad_id, app()->getLocale()])); ?>"
                        class="btn btn-outline-primary mb-2"><i class="bi bi-pen"></i></a>
                    <?php if($data->is_golden != 1): ?>
                        <button class="btn btn-outline-warning mb-2"
                            wire:click.prevent="makeGolden(<?php echo e($data->spcial_ad_id); ?>)"><i
                                class="bi bi-bookmark-star"></i></button>
                    <?php else: ?>
                    <?php endif; ?>
                </td>
            </tr>
        </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i><?php echo e(__('Empty')); ?></i>
                </h5>
            </td>
        </tr>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('linksOfPaganation'); ?>
    <?php echo $SA->links(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.livewireLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/dashboard/spcial-ad/index.blade.php ENDPATH**/ ?>
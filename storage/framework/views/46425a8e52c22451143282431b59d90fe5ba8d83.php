<?php $__env->startSection('title', __('My Favorite')); ?>

<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(asset('css/adCard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/MyAdsPage.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/loadingIndicator.css')); ?>" rel="stylesheet">
    <style>
        [aria-current] .page-link {
            background-color: black !important;
        }

        [rel='prev'], [rel='next'] {
            background-color: white !important;
            color: black;
        }

        .pagination > li :not([rel='prev'],[rel='next'],[aria-current] .page-link) {
            background-color: white !important;
            color: black;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.my-favorite')->html();
} elseif ($_instance->childHasBeenRendered('BoD2vlZ')) {
    $componentId = $_instance->getRenderedChildComponentId('BoD2vlZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('BoD2vlZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BoD2vlZ');
} else {
    $response = \Livewire\Livewire::mount('website.my-favorite');
    $html = $response->html();
    $_instance->logRenderedChild('BoD2vlZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/myfavorite.blade.php ENDPATH**/ ?>
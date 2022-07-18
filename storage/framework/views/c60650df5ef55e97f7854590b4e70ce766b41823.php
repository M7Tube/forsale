<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Ads Need Approval')); ?></title>
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
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.all-ads.accept-ads')->html();
} elseif ($_instance->childHasBeenRendered('iHSbmYj')) {
    $componentId = $_instance->getRenderedChildComponentId('iHSbmYj');
    $componentTag = $_instance->getRenderedChildComponentTagName('iHSbmYj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iHSbmYj');
} else {
    $response = \Livewire\Livewire::mount('dashboard.all-ads.accept-ads');
    $html = $response->html();
    $_instance->logRenderedChild('iHSbmYj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        Livewire.on('gotoTop', () => {
            window.scrollTo({
                top: 0,
                left: 0,
                behaviour: 'smooth'
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/AllAds/accept-all-ads.blade.php ENDPATH**/ ?>
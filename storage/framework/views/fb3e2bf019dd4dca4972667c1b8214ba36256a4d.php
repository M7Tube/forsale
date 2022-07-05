<?php $__env->startSection('title', __('My Ads')); ?>

<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(asset('css/adCard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/MyAdsPage.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/loadingIndicator.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.my-ads')->html();
} elseif ($_instance->childHasBeenRendered('fQR01TR')) {
    $componentId = $_instance->getRenderedChildComponentId('fQR01TR');
    $componentTag = $_instance->getRenderedChildComponentTagName('fQR01TR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fQR01TR');
} else {
    $response = \Livewire\Livewire::mount('website.my-ads');
    $html = $response->html();
    $_instance->logRenderedChild('fQR01TR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/MyAds.blade.php ENDPATH**/ ?>
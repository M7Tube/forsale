<?php $__env->startSection('title', __('Spcial Ad')); ?>

<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(asset('css/SpcialAdPage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.spcial-ad')->html();
} elseif ($_instance->childHasBeenRendered('p9r3PUz')) {
    $componentId = $_instance->getRenderedChildComponentId('p9r3PUz');
    $componentTag = $_instance->getRenderedChildComponentTagName('p9r3PUz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('p9r3PUz');
} else {
    $response = \Livewire\Livewire::mount('website.spcial-ad');
    $html = $response->html();
    $_instance->logRenderedChild('p9r3PUz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/spcialAd.blade.php ENDPATH**/ ?>
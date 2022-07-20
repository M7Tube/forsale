<?php $__env->startSection('title', __('HomePage')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.home-page')->html();
} elseif ($_instance->childHasBeenRendered('z9aPJ7c')) {
    $componentId = $_instance->getRenderedChildComponentId('z9aPJ7c');
    $componentTag = $_instance->getRenderedChildComponentTagName('z9aPJ7c');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z9aPJ7c');
} else {
    $response = \Livewire\Livewire::mount('website.home-page');
    $html = $response->html();
    $_instance->logRenderedChild('z9aPJ7c', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/homepage.blade.php ENDPATH**/ ?>
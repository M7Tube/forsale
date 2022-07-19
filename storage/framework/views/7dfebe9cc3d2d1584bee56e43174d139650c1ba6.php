<?php $__env->startSection('title', __('HomePage')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.home-page')->html();
} elseif ($_instance->childHasBeenRendered('ZnU1RmZ')) {
    $componentId = $_instance->getRenderedChildComponentId('ZnU1RmZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZnU1RmZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZnU1RmZ');
} else {
    $response = \Livewire\Livewire::mount('website.home-page');
    $html = $response->html();
    $_instance->logRenderedChild('ZnU1RmZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/homepage.blade.php ENDPATH**/ ?>
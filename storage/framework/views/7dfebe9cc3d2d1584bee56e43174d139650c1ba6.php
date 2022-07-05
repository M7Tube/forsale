<?php $__env->startSection('title', __('HomePage')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.home-page')->html();
} elseif ($_instance->childHasBeenRendered('cP7rJr4')) {
    $componentId = $_instance->getRenderedChildComponentId('cP7rJr4');
    $componentTag = $_instance->getRenderedChildComponentTagName('cP7rJr4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cP7rJr4');
} else {
    $response = \Livewire\Livewire::mount('website.home-page');
    $html = $response->html();
    $_instance->logRenderedChild('cP7rJr4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/homepage.blade.php ENDPATH**/ ?>
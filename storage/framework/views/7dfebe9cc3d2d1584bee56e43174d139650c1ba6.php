<?php $__env->startSection('title', __('HomePage')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.home-page')->html();
} elseif ($_instance->childHasBeenRendered('IBHxYIH')) {
    $componentId = $_instance->getRenderedChildComponentId('IBHxYIH');
    $componentTag = $_instance->getRenderedChildComponentTagName('IBHxYIH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IBHxYIH');
} else {
    $response = \Livewire\Livewire::mount('website.home-page');
    $html = $response->html();
    $_instance->logRenderedChild('IBHxYIH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/homepage.blade.php ENDPATH**/ ?>
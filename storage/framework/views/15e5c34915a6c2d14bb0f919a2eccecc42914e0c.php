<?php $__env->startSection('title', __('Confirm Register')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.confirm-register')->html();
} elseif ($_instance->childHasBeenRendered('IXcwiaQ')) {
    $componentId = $_instance->getRenderedChildComponentId('IXcwiaQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('IXcwiaQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IXcwiaQ');
} else {
    $response = \Livewire\Livewire::mount('website.confirm-register');
    $html = $response->html();
    $_instance->logRenderedChild('IXcwiaQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/confirm-register.blade.php ENDPATH**/ ?>
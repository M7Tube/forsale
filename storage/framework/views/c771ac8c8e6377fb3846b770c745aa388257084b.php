<?php $__env->startSection('title', __('Terms and Conditions')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.terms')->html();
} elseif ($_instance->childHasBeenRendered('KM0Xnbq')) {
    $componentId = $_instance->getRenderedChildComponentId('KM0Xnbq');
    $componentTag = $_instance->getRenderedChildComponentTagName('KM0Xnbq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KM0Xnbq');
} else {
    $response = \Livewire\Livewire::mount('website.terms');
    $html = $response->html();
    $_instance->logRenderedChild('KM0Xnbq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/terms.blade.php ENDPATH**/ ?>
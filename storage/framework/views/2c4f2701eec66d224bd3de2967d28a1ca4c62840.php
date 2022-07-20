<?php $__env->startSection('title', __('Add New Ad')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.add-new-ad')->html();
} elseif ($_instance->childHasBeenRendered('AgABDq9')) {
    $componentId = $_instance->getRenderedChildComponentId('AgABDq9');
    $componentTag = $_instance->getRenderedChildComponentTagName('AgABDq9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AgABDq9');
} else {
    $response = \Livewire\Livewire::mount('website.add-new-ad');
    $html = $response->html();
    $_instance->logRenderedChild('AgABDq9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/AddNewAd.blade.php ENDPATH**/ ?>
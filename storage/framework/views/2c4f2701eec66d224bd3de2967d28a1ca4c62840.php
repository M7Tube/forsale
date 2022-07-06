<?php $__env->startSection('title', __('Add New Ad')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.add-new-ad')->html();
} elseif ($_instance->childHasBeenRendered('E2YOcNJ')) {
    $componentId = $_instance->getRenderedChildComponentId('E2YOcNJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('E2YOcNJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('E2YOcNJ');
} else {
    $response = \Livewire\Livewire::mount('website.add-new-ad');
    $html = $response->html();
    $_instance->logRenderedChild('E2YOcNJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/AddNewAd.blade.php ENDPATH**/ ?>
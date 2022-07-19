<?php $__env->startSection('title', __('Login')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.login')->html();
} elseif ($_instance->childHasBeenRendered('9iX8S3s')) {
    $componentId = $_instance->getRenderedChildComponentId('9iX8S3s');
    $componentTag = $_instance->getRenderedChildComponentTagName('9iX8S3s');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9iX8S3s');
} else {
    $response = \Livewire\Livewire::mount('website.login');
    $html = $response->html();
    $_instance->logRenderedChild('9iX8S3s', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/login.blade.php ENDPATH**/ ?>
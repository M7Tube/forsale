<?php $__env->startSection('title', __('Register')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.register')->html();
} elseif ($_instance->childHasBeenRendered('jt7Iw2G')) {
    $componentId = $_instance->getRenderedChildComponentId('jt7Iw2G');
    $componentTag = $_instance->getRenderedChildComponentTagName('jt7Iw2G');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jt7Iw2G');
} else {
    $response = \Livewire\Livewire::mount('website.register');
    $html = $response->html();
    $_instance->logRenderedChild('jt7Iw2G', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/register.blade.php ENDPATH**/ ?>
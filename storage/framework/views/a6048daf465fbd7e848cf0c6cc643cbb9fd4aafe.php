<?php $__env->startSection('title', __('Register')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.register')->html();
} elseif ($_instance->childHasBeenRendered('AFEYaFE')) {
    $componentId = $_instance->getRenderedChildComponentId('AFEYaFE');
    $componentTag = $_instance->getRenderedChildComponentTagName('AFEYaFE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AFEYaFE');
} else {
    $response = \Livewire\Livewire::mount('website.register');
    $html = $response->html();
    $_instance->logRenderedChild('AFEYaFE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/register.blade.php ENDPATH**/ ?>
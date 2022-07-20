<?php $__env->startSection('title', __('Login')); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.login')->html();
} elseif ($_instance->childHasBeenRendered('bDZnOiJ')) {
    $componentId = $_instance->getRenderedChildComponentId('bDZnOiJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('bDZnOiJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bDZnOiJ');
} else {
    $response = \Livewire\Livewire::mount('website.login');
    $html = $response->html();
    $_instance->logRenderedChild('bDZnOiJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Website/login.blade.php ENDPATH**/ ?>
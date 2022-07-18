<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Register')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.register')->html();
} elseif ($_instance->childHasBeenRendered('qOjgXVX')) {
    $componentId = $_instance->getRenderedChildComponentId('qOjgXVX');
    $componentTag = $_instance->getRenderedChildComponentTagName('qOjgXVX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qOjgXVX');
} else {
    $response = \Livewire\Livewire::mount('auth.register');
    $html = $response->html();
    $_instance->logRenderedChild('qOjgXVX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/auth/register.blade.php ENDPATH**/ ?>
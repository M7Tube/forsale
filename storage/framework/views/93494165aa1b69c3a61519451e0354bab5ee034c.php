<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Users')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.users.index')->html();
} elseif ($_instance->childHasBeenRendered('av3AG6E')) {
    $componentId = $_instance->getRenderedChildComponentId('av3AG6E');
    $componentTag = $_instance->getRenderedChildComponentTagName('av3AG6E');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('av3AG6E');
} else {
    $response = \Livewire\Livewire::mount('dashboard.users.index');
    $html = $response->html();
    $_instance->logRenderedChild('av3AG6E', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Users/index.blade.php ENDPATH**/ ?>
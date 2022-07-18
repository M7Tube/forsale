<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Admin Users')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.users.index')->html();
} elseif ($_instance->childHasBeenRendered('ocZpVXM')) {
    $componentId = $_instance->getRenderedChildComponentId('ocZpVXM');
    $componentTag = $_instance->getRenderedChildComponentTagName('ocZpVXM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ocZpVXM');
} else {
    $response = \Livewire\Livewire::mount('dashboard.users.index');
    $html = $response->html();
    $_instance->logRenderedChild('ocZpVXM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Users/index.blade.php ENDPATH**/ ?>
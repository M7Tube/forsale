<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Web/App Commercial Users')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.users.web-app-index2')->html();
} elseif ($_instance->childHasBeenRendered('yexZRDU')) {
    $componentId = $_instance->getRenderedChildComponentId('yexZRDU');
    $componentTag = $_instance->getRenderedChildComponentTagName('yexZRDU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yexZRDU');
} else {
    $response = \Livewire\Livewire::mount('dashboard.users.web-app-index2');
    $html = $response->html();
    $_instance->logRenderedChild('yexZRDU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Users/WebAppindex2.blade.php ENDPATH**/ ?>
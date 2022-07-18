<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Web/App Users')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.users.web-app-index')->html();
} elseif ($_instance->childHasBeenRendered('bnTexRQ')) {
    $componentId = $_instance->getRenderedChildComponentId('bnTexRQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('bnTexRQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bnTexRQ');
} else {
    $response = \Livewire\Livewire::mount('dashboard.users.web-app-index');
    $html = $response->html();
    $_instance->logRenderedChild('bnTexRQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Users/Web/Appindex.blade.php ENDPATH**/ ?>
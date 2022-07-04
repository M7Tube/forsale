<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Apartment Status')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.apartment-status.index')->html();
} elseif ($_instance->childHasBeenRendered('7CfgrNn')) {
    $componentId = $_instance->getRenderedChildComponentId('7CfgrNn');
    $componentTag = $_instance->getRenderedChildComponentTagName('7CfgrNn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7CfgrNn');
} else {
    $response = \Livewire\Livewire::mount('dashboard.apartment-status.index');
    $html = $response->html();
    $_instance->logRenderedChild('7CfgrNn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/ApartmentStatus/index.blade.php ENDPATH**/ ?>
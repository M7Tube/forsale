<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Neighborhoods')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.neighborhood.index')->html();
} elseif ($_instance->childHasBeenRendered('tKCAJiD')) {
    $componentId = $_instance->getRenderedChildComponentId('tKCAJiD');
    $componentTag = $_instance->getRenderedChildComponentTagName('tKCAJiD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tKCAJiD');
} else {
    $response = \Livewire\Livewire::mount('dashboard.neighborhood.index');
    $html = $response->html();
    $_instance->logRenderedChild('tKCAJiD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Neighborhood/index.blade.php ENDPATH**/ ?>
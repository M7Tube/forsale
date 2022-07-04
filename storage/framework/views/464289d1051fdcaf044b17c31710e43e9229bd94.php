<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Cars')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.cars.index')->html();
} elseif ($_instance->childHasBeenRendered('Uyiy7IT')) {
    $componentId = $_instance->getRenderedChildComponentId('Uyiy7IT');
    $componentTag = $_instance->getRenderedChildComponentTagName('Uyiy7IT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Uyiy7IT');
} else {
    $response = \Livewire\Livewire::mount('dashboard.cars.index');
    $html = $response->html();
    $_instance->logRenderedChild('Uyiy7IT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Cars/index.blade.php ENDPATH**/ ?>
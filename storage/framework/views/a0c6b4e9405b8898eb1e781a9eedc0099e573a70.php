<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Jobs')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.jobs.index')->html();
} elseif ($_instance->childHasBeenRendered('ymMg4yu')) {
    $componentId = $_instance->getRenderedChildComponentId('ymMg4yu');
    $componentTag = $_instance->getRenderedChildComponentTagName('ymMg4yu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ymMg4yu');
} else {
    $response = \Livewire\Livewire::mount('dashboard.jobs.index');
    $html = $response->html();
    $_instance->logRenderedChild('ymMg4yu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Jobs/index.blade.php ENDPATH**/ ?>
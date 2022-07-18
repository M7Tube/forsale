<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Years Of Experience')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.years-of-experience.index')->html();
} elseif ($_instance->childHasBeenRendered('BmiB09Z')) {
    $componentId = $_instance->getRenderedChildComponentId('BmiB09Z');
    $componentTag = $_instance->getRenderedChildComponentTagName('BmiB09Z');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BmiB09Z');
} else {
    $response = \Livewire\Livewire::mount('dashboard.years-of-experience.index');
    $html = $response->html();
    $_instance->logRenderedChild('BmiB09Z', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/YearsOfExperience/index.blade.php ENDPATH**/ ?>
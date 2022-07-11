<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Statistics')); ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.app-settings.statistics')->html();
} elseif ($_instance->childHasBeenRendered('6LAKScy')) {
    $componentId = $_instance->getRenderedChildComponentId('6LAKScy');
    $componentTag = $_instance->getRenderedChildComponentTagName('6LAKScy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6LAKScy');
} else {
    $response = \Livewire\Livewire::mount('dashboard.app-settings.statistics');
    $html = $response->html();
    $_instance->logRenderedChild('6LAKScy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/AppSettings/Statistics.blade.php ENDPATH**/ ?>
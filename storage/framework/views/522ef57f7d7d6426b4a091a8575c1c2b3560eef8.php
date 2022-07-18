<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.dashboard')->html();
} elseif ($_instance->childHasBeenRendered('Q59Tq5v')) {
    $componentId = $_instance->getRenderedChildComponentId('Q59Tq5v');
    $componentTag = $_instance->getRenderedChildComponentTagName('Q59Tq5v');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Q59Tq5v');
} else {
    $response = \Livewire\Livewire::mount('dashboard.dashboard');
    $html = $response->html();
    $_instance->logRenderedChild('Q59Tq5v', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/dashboard.blade.php ENDPATH**/ ?>
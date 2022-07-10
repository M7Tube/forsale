<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.dashboard')->html();
} elseif ($_instance->childHasBeenRendered('8Q91CER')) {
    $componentId = $_instance->getRenderedChildComponentId('8Q91CER');
    $componentTag = $_instance->getRenderedChildComponentTagName('8Q91CER');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8Q91CER');
} else {
    $response = \Livewire\Livewire::mount('dashboard.dashboard');
    $html = $response->html();
    $_instance->logRenderedChild('8Q91CER', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/dashboard.blade.php ENDPATH**/ ?>
<?php $__env->startSection('insideHead'); ?>
    <title><?php echo e(__('Admin Ads')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.spcial-ad.index')->html();
} elseif ($_instance->childHasBeenRendered('0AkqLEc')) {
    $componentId = $_instance->getRenderedChildComponentId('0AkqLEc');
    $componentTag = $_instance->getRenderedChildComponentTagName('0AkqLEc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0AkqLEc');
} else {
    $response = \Livewire\Livewire::mount('dashboard.spcial-ad.index');
    $html = $response->html();
    $_instance->logRenderedChild('0AkqLEc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/spcialAd/index.blade.php ENDPATH**/ ?>
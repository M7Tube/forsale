<?php $__env->startSection('insideHead'); ?>
    <title>Send General Notification</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('insideBody'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.notification.send')->html();
} elseif ($_instance->childHasBeenRendered('qqWJ9eo')) {
    $componentId = $_instance->getRenderedChildComponentId('qqWJ9eo');
    $componentTag = $_instance->getRenderedChildComponentTagName('qqWJ9eo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qqWJ9eo');
} else {
    $response = \Livewire\Livewire::mount('dashboard.notification.send');
    $html = $response->html();
    $_instance->logRenderedChild('qqWJ9eo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/Notification/send.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome Email</title>
</head>

<body>
    <h2 style="text-align: center; background-color: black; padding: 25px; color:white;">
        <?php echo e(__('Welcome To Waseetcom')); ?></h2>
    <br>
    <h1 style="text-align: center;"><?php echo e(__('Your Register Code Is :')); ?>

        <b><?php echo e($serial_number); ?></b></h1>
</body>
</html>

<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/emails/code.blade.php ENDPATH**/ ?>
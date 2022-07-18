<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="<?php echo e(asset('vendor2/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <style>
        :root {
            touch-action: pan-x pan-y;
            height: 100%
        }

        .noselect {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Old versions of Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
        }

        .Scard {
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .Scard:hover {
            transform: scale(1.01);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

    </style>
    <title>Wallets</title>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body style="background-color: rgb(236, 235, 235)">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.wallet.index')->html();
} elseif ($_instance->childHasBeenRendered('l5fcLkF')) {
    $componentId = $_instance->getRenderedChildComponentId('l5fcLkF');
    $componentTag = $_instance->getRenderedChildComponentTagName('l5fcLkF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l5fcLkF');
} else {
    $response = \Livewire\Livewire::mount('dashboard.wallet.index');
    $html = $response->html();
    $_instance->logRenderedChild('l5fcLkF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/Dashboard/wallet/index.blade.php ENDPATH**/ ?>
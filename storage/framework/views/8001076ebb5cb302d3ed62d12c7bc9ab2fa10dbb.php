<div id="contenedor-loader" style="visibility: hidden;">
<style>
        #loader {
            border: 12px solid #f3f3f3;
            border-radius: 50%;
            border-top: 12px solid #444444;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
        }

        .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        @keyframes  spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
<div id="loader" class="center"></div>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php if(!auth()->user()): ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?></title>
    <meta name="description" content="Compra y vende Embarcaciones">
    <meta name="keywords" content="vende, compra, Barco, Bote, Embarcación, Embarcaciones, Barcoexprés, Barcoexpres">
    <link rel="shortcut icon" type="x-icon" href="/img/logo_barcoexpre.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style-welcome.css">
    <link rel="stylesheet" href="/css/navigationMap.css">
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/js/jquery-3.6.4.min.js"></script>  
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/carouselOffer.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php endif; ?>
</head> 
<body>
    <div class="row"> 
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
            <?php if($in_cellphonecontact > 0): ?>            
                <div class="row" id="whatsapp" style="position: fixed; bottom: 20px; right:20px; z-index: 20;">
                    <a href="https://api.whatsapp.com/send?phone=+58<?php echo e($comercio->contactcellphone); ?>&text=<?php echo e($comercio->msgcontact); ?>" target="_blank">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14 text-success" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
                    </a>
                </div>
            <?php endif; ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-nuevo', [
                    'comercioId' => 1,
                    ])->html();
} elseif ($_instance->childHasBeenRendered('AyJQw9z')) {
    $componentId = $_instance->getRenderedChildComponentId('AyJQw9z');
    $componentTag = $_instance->getRenderedChildComponentTagName('AyJQw9z');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AyJQw9z');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-nuevo', [
                    'comercioId' => 1,
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('AyJQw9z', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <div class="wrapper">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.view-details', [
                        'productId' => $productId
                    ])->html();
} elseif ($_instance->childHasBeenRendered('Joj3Ors')) {
    $componentId = $_instance->getRenderedChildComponentId('Joj3Ors');
    $componentTag = $_instance->getRenderedChildComponentTagName('Joj3Ors');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Joj3Ors');
} else {
    $response = \Livewire\Livewire::mount('afiliado.view-details', [
                        'productId' => $productId
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('Joj3Ors', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.footer', [
                'comercioId' => 1,
                ])->html();
} elseif ($_instance->childHasBeenRendered('eutaLlA')) {
    $componentId = $_instance->getRenderedChildComponentId('eutaLlA');
    $componentTag = $_instance->getRenderedChildComponentTagName('eutaLlA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('eutaLlA');
} else {
    $response = \Livewire\Livewire::mount('layouts.footer', [
                'comercioId' => 1,
                ]);
    $html = $response->html();
    $_instance->logRenderedChild('eutaLlA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

</body>
    
</html>
<script>
    document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("#contenedor-loader").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("#contenedor-loader").style.visibility = "visible";
    }
};
</script>
<?php if(!auth()->user()): ?>
    <script src="/js/app.js"></script>
    <script src="/js/backend.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>

    <?php echo $__env->yieldPushContent('alpine-plugins'); ?>
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->
<?php endif; ?>

</div><?php /**PATH /home/typej/Documentos/github/barcoexpres/resources/views/externalviews/view-details.blade.php ENDPATH**/ ?>
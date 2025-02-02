<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name')); ?></title>
    <meta name="description" content="Compra y vende Embarcaciones">
    <meta name="keywords" content="vende, compra, Barco, Bote, Embarcación, Embarcaciones, Barcoexprés, Barcoexpres">
    <link rel="shortcut icon" type="x-icon" href="/img/barcoexpres_favicon_circulo.png" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style-welcome.css">
    <link rel="stylesheet" href="/css/navigationMap.css">
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700" rel="stylesheet">
    
    <script src="/js/jquery-3.6.4.min.js"></script>  
    <!-- <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css"> -->
    <link rel="stylesheet" href="/css/carouselOffer.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>    
<body>
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
            <div class="wrapper">
                <?php if($in_cellphonecontact > 0): ?>            
                    <div class="row" id="whatsapp" style="position: fixed; bottom: 20px; right:20px; z-index: 20;">
                        <a href="https://api.whatsapp.com/send?phone=+58<?php echo e($comercio->contactcellphone); ?>&text=<?php echo e($comercio->msgcontact); ?>" target="_blank">
                            <!-- <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14 text-success" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg> -->
                             <img style="width: 65px;" src="/img/iconowhatsapp_azul.png" alt="">
                        </a>
                    </div>            
                <?php endif; ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-nuevo', [
                        'comercioId' => 1,
                        ])->html();
} elseif ($_instance->childHasBeenRendered('6sybjyc')) {
    $componentId = $_instance->getRenderedChildComponentId('6sybjyc');
    $componentTag = $_instance->getRenderedChildComponentTagName('6sybjyc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6sybjyc');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-nuevo', [
                        'comercioId' => 1,
                        ]);
    $html = $response->html();
    $_instance->logRenderedChild('6sybjyc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php if($words == '' || $words == null): ?>   
                    <?php if($in_sliderprincipal > 0): ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.promociones')->html();
} elseif ($_instance->childHasBeenRendered('4FNtU3G')) {
    $componentId = $_instance->getRenderedChildComponentId('4FNtU3G');
    $componentTag = $_instance->getRenderedChildComponentTagName('4FNtU3G');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4FNtU3G');
} else {
    $response = \Livewire\Livewire::mount('components.promociones');
    $html = $response->html();
    $_instance->logRenderedChild('4FNtU3G', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if($in_marcasproductos > 0): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.marcas-productos')->html();
} elseif ($_instance->childHasBeenRendered('sxbzNKo')) {
    $componentId = $_instance->getRenderedChildComponentId('sxbzNKo');
    $componentTag = $_instance->getRenderedChildComponentTagName('sxbzNKo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sxbzNKo');
} else {
    $response = \Livewire\Livewire::mount('components.marcas-productos');
    $html = $response->html();
    $_instance->logRenderedChild('sxbzNKo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endif; ?>
                <div class="my-2"></div>    
                <section class="container">
                    <div class="my-2"></div>                    
                    <?php if($words == ''): ?>    
                        <div class="my-2"></div>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.show-products', ['comercioId' => $comercio_id, 'currencyValue' => $currencyValue])->html();
} elseif ($_instance->childHasBeenRendered('Zi8w4uS')) {
    $componentId = $_instance->getRenderedChildComponentId('Zi8w4uS');
    $componentTag = $_instance->getRenderedChildComponentTagName('Zi8w4uS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Zi8w4uS');
} else {
    $response = \Livewire\Livewire::mount('components.show-products', ['comercioId' => $comercio_id, 'currencyValue' => $currencyValue]);
    $html = $response->html();
    $_instance->logRenderedChild('Zi8w4uS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>
                    
                    <?php if($words != '' ): ?>   
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.results-products', [
                            'comercioId' => $comercio_id, 
                            'parametro' => $words,
                            ])->html();
} elseif ($_instance->childHasBeenRendered('uLm6LNa')) {
    $componentId = $_instance->getRenderedChildComponentId('uLm6LNa');
    $componentTag = $_instance->getRenderedChildComponentTagName('uLm6LNa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uLm6LNa');
} else {
    $response = \Livewire\Livewire::mount('components.results-products', [
                            'comercioId' => $comercio_id, 
                            'parametro' => $words,
                            ]);
    $html = $response->html();
    $_instance->logRenderedChild('uLm6LNa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    </div>
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.footer', [
                'comercioId' => 1,
                ])->html();
} elseif ($_instance->childHasBeenRendered('UDgCdb8')) {
    $componentId = $_instance->getRenderedChildComponentId('UDgCdb8');
    $componentTag = $_instance->getRenderedChildComponentTagName('UDgCdb8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UDgCdb8');
} else {
    $response = \Livewire\Livewire::mount('layouts.footer', [
                'comercioId' => 1,
                ]);
    $html = $response->html();
    $_instance->logRenderedChild('UDgCdb8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

</body>
    
</html>
</div>

<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script>


<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>

<?php echo $__env->yieldPushContent('alpine-plugins'); ?>
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->



<?php /**PATH /home/typej/Documentos/github/barcoexpres-1/resources/views/welcome.blade.php ENDPATH**/ ?>
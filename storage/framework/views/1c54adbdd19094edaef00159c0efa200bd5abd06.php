<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name')); ?></title>
    <meta name="description" content="Compra y vende Embarcaciones">
    <meta name="keywords" content="vende, compra, Barco, Bote, Embarcación, Embarcaciones, Barcoexprés, Barcoexpres">
    <link rel="shortcut icon" type="x-icon" href="/img/barcoexpres_favicon_circulo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
	    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
        <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->	    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/showProducts.css">    
    
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>


</head>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="/js/jquery-3.6.4.min.js"></script> -->
    
    <body class="hold-transition sidebar-mini <?php echo e(setting('sidebar_collapse') ? 'sidebar-collapse' : ''); ?>">
    <div class="wrapper">
        
    <?php if(auth()->guard()->check()): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-in')->html();
} elseif ($_instance->childHasBeenRendered('DRs3wab')) {
    $componentId = $_instance->getRenderedChildComponentId('DRs3wab');
    $componentTag = $_instance->getRenderedChildComponentTagName('DRs3wab');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DRs3wab');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-in');
    $html = $response->html();
    $_instance->logRenderedChild('DRs3wab', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
         <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('layouts.partials.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo e($slot); ?>

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.footer')->html();
} elseif ($_instance->childHasBeenRendered('ysMOHzS')) {
    $componentId = $_instance->getRenderedChildComponentId('ysMOHzS');
    $componentTag = $_instance->getRenderedChildComponentTagName('ysMOHzS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ysMOHzS');
} else {
    $response = \Livewire\Livewire::mount('layouts.footer');
    $html = $response->html();
    $_instance->logRenderedChild('ysMOHzS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    </body>

    <!-- ./wrapper -->
    <?php endif; ?>
    

</html>


<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>
<!-- <script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script> -->
<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>

<?php echo $__env->yieldPushContent('alpine-plugins'); ?>
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->



<?php /**PATH /home/typej/Documentos/github/repuestoexpres/resources/views/layouts/app.blade.php ENDPATH**/ ?>
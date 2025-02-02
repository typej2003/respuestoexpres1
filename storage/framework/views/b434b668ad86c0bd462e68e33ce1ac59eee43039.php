<div class="navbar navbar-fixed-bottom footer-navigation">
	<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.navigation-map', ['comercio_id' => $comercio_id])->html();
} elseif ($_instance->childHasBeenRendered('l859088784-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l859088784-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l859088784-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l859088784-0');
} else {
    $response = \Livewire\Livewire::mount('components.navigation-map', ['comercio_id' => $comercio_id]);
    $html = $response->html();
    $_instance->logRenderedChild('l859088784-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	<div class="footer footer-color">  
		<div class="row mx-2">
				<div class="col-12 col-md-3 my-1">
					<span><img class="img-fluid footer-img" style="width: 60%" src="/img/LOGO_DDR.png" alt=""></span>
				</div>
				<div class="col-12 col-md-3 my-1 text-white">
					<span>COPYRIGHT &copy; <?php echo e(date('Y')); ?> DDR SISTEMAS C.A. RIF: J-31512955-8</span>
					<span>V1.0.0 PV2</span>
				</div>
				<div class="col-12 col-md-6 my-1">
					<span><img class="img-fluid footer-img2" src="/img/LOGO_BANCO.png" alt=""></span>
				</div>
		</div>
	</div>
</div><?php /**PATH /home/typej/Documentos/github/barcoexpres/resources/views/livewire/layouts/footer.blade.php ENDPATH**/ ?>
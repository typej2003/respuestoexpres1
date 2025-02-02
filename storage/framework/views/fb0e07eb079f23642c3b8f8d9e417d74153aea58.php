<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'layouts.app','data' => []]); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <div>
      <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Escritorio</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Escritorio</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <?php if(auth()->user()=='admin'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard.appointments-count', [])->html();
} elseif ($_instance->childHasBeenRendered('TDgUwUJ')) {
    $componentId = $_instance->getRenderedChildComponentId('TDgUwUJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('TDgUwUJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TDgUwUJ');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard.appointments-count', []);
    $html = $response->html();
    $_instance->logRenderedChild('TDgUwUJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard.users-count', [])->html();
} elseif ($_instance->childHasBeenRendered('ivvEk1c')) {
    $componentId = $_instance->getRenderedChildComponentId('ivvEk1c');
    $componentTag = $_instance->getRenderedChildComponentTagName('ivvEk1c');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ivvEk1c');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard.users-count', []);
    $html = $response->html();
    $_instance->logRenderedChild('ivvEk1c', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/typej/Documentos/github/repuestoexpres/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                        @if($controlActivity)
                            <span>Editar Producto RepuestoExpres</span>
                        @else
                            <span>Crear Producto RepuestoExpres</span>
                        @endif
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/listProducts/{{$comercio->user_id}}">Productos</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @if($comercio)
            <div class="row">
                <div class="col-lg-12">
                    <div class="card w-75">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <span>Propietario: </span>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <label class="form-control">{{$comercio->propietario()}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <span>Comercio: </span>
                            </div>
                            <div class="col-lg-9">                                
                                <div class="input-group mb-3">
                                    <label class="form-control">{{$comercio->name}}</label>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="checkbox"> <span class="ml-1"> Aplicar a mis comercios</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                <form autocomplete="off" wire:submit.prevent="{{ $controlActivity ? 'updateProduct' : 'createProduct' }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <!--  Carateristicas -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="form-group" wire:ignore>
                                                <label for="area_id">Área</label>
                                                <select wire:model.defer="state.area_id" class="form-control @error('area_id') is-invalid @enderror" id="area_id" disabled>
                                                    <option value="0">Seleccione una opción</option>
                                                    @foreach($areas as $area)
                                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('area_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="code_lote">Código del Lote</label>
                                                <input type="text" wire:model.defer="state.code_lote" autofocus class="font-costo form-control @error('code_lote') is-invalid @enderror" id="code_lote">
                                                @error('code_lote')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="code">Código del Producto<span class="text-danger"> *</span></label>
                                                <input type="text" wire:model.defer="state.code"  id="code" class="font-costo form-control @error('code') is-invalid @enderror" autofocus >
                                                @error('code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Nombre del Producto<span class="text-danger"> *</span></label>
                                                <input type="text" wire:model.defer="state.name"  id="name" class="font-costo form-control @error('name') is-invalid @enderror" autofocus >
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group" wire:ignore>
                                                <label for="seccion">Sección</label>
                                                <select wire:model="seccion" class="form-control @error('seccion') is-invalid @enderror" id="seccion">
                                                    <option value="0">Seleccione una opción</option>
                                                    <option value="1">CARRO</option>
                                                    <option value="2">MOTO</option>
                                                </select>
                                                @error('seccion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="category_id">Categoría<span class="text-danger">*</span></label>
                                                <select wire:model.defer="state.category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
                                                    <option value="0">Seleccione una opción</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->ruta }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="manufacturer_id">Fabricante<span class="text-danger">*</span></label>
                                                <div class="input-group mb-3">
                                                    <select wire:model="manufacturer"  id="manufacturer" class="form-control @error('manufacturer') is-invalid @enderror" autofocus >
                                                        <option value="0">Seleccione una opción</option>
                                                        @foreach($manufacturers as $manuf)
                                                            <option value="{{$manuf->id}}">{{$manuf->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <a href=""><span class="fas fa-plus"></span></a>
                                                        </div>
                                                    </div>
                                                    @error('manufacturer_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="model_id">Modelo</label>
                                                <div class="input-group mb-3">
                                                    <select wire:model.defer="state.model_id"  id="model_id" class="font-costo form-control @error('model_id') is-invalid @enderror" autofocus >
                                                        <option value="0">Seleccione una opción</option>
                                                        @foreach($models as $model)
                                                            <option value="{{$model->id}}">{{$model->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <a href=""><span class="fas fa-plus"></span></a>
                                                        </div>
                                                    </div>
                                                    @error('model_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Fotos y video -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label for="customFile">Imagen 1 del Producto</label>
                                                <div class="custom-file">
                                                    <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                        <input wire:model="photo1" type="file" class="custom-file-input" id="customFile">
                                                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                                <span class="sr-only">40% Completo (exito)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="custom-file-label" for="customFile">
                                                        @if ($photo1)
                                                        {{ $photo1->getClientOriginalName() }}
                                                        @else
                                                        Seleccione la imagen
                                                        @endif
                                                    </label>
                                                </div>

                                                @if ($photo1)
                                                <img src="{{ $photo1->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded" style="width:280px !important;">
                                                @else
                                                <img src="{{ $state['image1_url'] ?? '' }}" class="img d-block mb-2 w-100 rounded" style="width:280px !important;">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="customFile">Imagen 2 del Producto</label>
                                                <div class="custom-file">
                                                    <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                        <input wire:model="photo2" type="file" class="custom-file-input" id="customFile">
                                                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                                <span class="sr-only">40% Completo (exito)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="custom-file-label" for="customFile">
                                                        @if ($photo2)
                                                        {{ $photo2->getClientOriginalName() }}
                                                        @else
                                                        Seleccione la imagen
                                                        @endif
                                                    </label>
                                                </div>

                                                @if ($photo2)
                                                <img src="{{ $photo2->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded" style="width:280px !important;">
                                                @else
                                                <img src="{{ $state['image2_url'] ?? '' }}" class="img d-block mb-2 w-100 rounded" style="width:280px !important;">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="customFile">Imagen 3 del Producto</label>
                                                <div class="custom-file">
                                                    <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                        <input wire:model="photo3" type="file" class="custom-file-input" id="customFile">
                                                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                                <span class="sr-only">40% Completo (exito)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="custom-file-label" for="customFile">
                                                        @if ($photo3)
                                                        {{ $photo3->getClientOriginalName() }}
                                                        @else
                                                        Seleccione la imagen
                                                        @endif
                                                    </label>
                                                </div>

                                                @if ($photo3)
                                                <img src="{{ $photo3->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded" style="width:280px !important;">
                                                @else
                                                <img src="{{ $state['image3_url'] ?? '' }}" class="img d-block mb-2 w-100 rounded" style="width:280px !important;">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="customFile">Imagen 4 del Producto</label>
                                                <div class="custom-file">
                                                    <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                        <input wire:model="photo4" type="file" class="custom-file-input" id="customFile">
                                                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                                <span class="sr-only">40% Completo (exito)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="custom-file-label" for="customFile">
                                                        @if ($photo4)
                                                        {{ $photo4->getClientOriginalName() }}
                                                        @else
                                                        Seleccione la imagen
                                                        @endif
                                                    </label>
                                                </div>

                                                @if ($photo4)
                                                <img src="{{ $photo4->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded" style="width:280px !important;">
                                                @else
                                                <img src="{{ $state['image4_url'] ?? '' }}" class="img d-block mb-2 w-100 rounded" style="width:280px !important;">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Detalles -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="details1">Detalle 1</label>
                                                <textarea wire:model.defer="state.details1" autofocus class="font-costo form-control @error('details1') is-invalid @enderror" id="details1" rows="5"></textarea>
                                                @error('details1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="details2">Detalle 2</label>
                                                <textarea wire:model.defer="state.details2" autofocus class="font-costo form-control @error('details2') is-invalid @enderror" id="details2" rows="5"></textarea>
                                                @error('details2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Descripción</label>
                                                <textarea  wire:model.defer="state.description" autofocus class="font-costo form-control @error('description') is-invalid @enderror" id="description" rows="5"></textarea>
                                                @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Precios detal -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price1">Precio 1<span class="text-danger">*</span></label>
                                                <input type="number" wire:model.defer="state.price1" autofocus class="font-costo form-control @error('price1') is-invalid @enderror" id="price1">
                                                @error('price1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price2">Precio 2</label>
                                                <input type="number" wire:model.defer="state.price2" autofocus class="font-costo form-control @error('price2') is-invalid @enderror" id="price2">
                                                @error('price2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        
                                        </div>
                                    </div>
                                    <!-- Precios al Mayor wholesaler  -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            
                                        </div>
                                        <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                    <!-- Precios de Oferta  -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price_offer">Precio de Oferta</label>
                                                <input type="number" wire:model.defer="state.price_offer" autofocus class="font-costo form-control @error('price_offer') is-invalid @enderror" id="price_offer">
                                                @error('price_offer')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price_divisa">Precio de la Divisa</label>
                                                <input type="number" wire:model.defer="state.price_divisa" autofocus class="font-costo form-control @error('price_divisa') is-invalid @enderror" id="price_divisa">
                                                @error('price_divisa')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Stock -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="stock_min">Stock Mínimo</label>
                                                <input type="number" wire:model.defer="state.stock_min" autofocus class="font-costo form-control @error('stock_min') is-invalid @enderror" id="stock_min">
                                                @error('stock_min')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="stock_max">Stock Máximo</label>
                                                <input type="number" wire:model.defer="state.stock_max" autofocus class="font-costo form-control @error('stock_max') is-invalid @enderror" id="stock_max">
                                                @error('stock_max')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="stock">Stock</label>
                                                <input type="number" wire:model.defer="state.stock" autofocus class="font-costo form-control @error('stock') is-invalid @enderror" id="stock">
                                                @error('stock')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Proveedor -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="supplier_id">Proveedor<span class="text-danger">*</span></label>
                                                <div class="input-group mb-3">
                                                    <select wire:model.defer="state.supplier_id"  id="supplier_id" class="font-costo form-control @error('supplier_id') is-invalid @enderror" autofocus >
                                                        <option value="0">Seleccione una opción</option>
                                                        @foreach($suppliers as $supplier)
                                                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <a href=""><span class="fas fa-plus"></span></a>
                                                        </div>
                                                    </div>
                                                    @error('supplier_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tx_peso">Peso</label>
                                                <input type="text" wire:model.defer="state.tx_peso" autofocus class="font-costo form-control @error('tx_peso') is-invalid @enderror" id="tx_peso">
                                                @error('tx_peso')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tx_tamanio">Tamaño</label>
                                                <input type="text" wire:model.defer="state.tx_tamanio" autofocus class="font-costo form-control @error('tx_tamanio') is-invalid @enderror" id="tx_tamanio">
                                                @error('tx_tamanio')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>                                    

                                    <!-- Caracteristica del paquete -->
                                    <div class="row">                                    
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fe_expedicion">Fecha de Expedicion</label>
                                                <input type="date" wire:model.defer="state.fe_expedicion" autofocus class="font-costo form-control @error('fe_expedicion') is-invalid @enderror" id="fe_expedicion">
                                                @error('fe_expedicion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="madein">Lugar de Elaboración</label>
                                                <input type="text" wire:model.defer="state.madein" autofocus class="font-costo form-control @error('madein') is-invalid @enderror" id="madein">
                                                @error('madein')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ca_valoracion">Calificación de Valoracion</label>
                                                <input type="text" wire:model.defer="state.ca_valoracion" autofocus class="font-costo form-control @error('ca_valoracion') is-invalid @enderror" id="ca_valoracion">
                                                @error('ca_valoracion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_pickup" autofocus class="my-2 @error('in_pickup') is-invalid @enderror" id="in_pickup"> <span class="font-costo my-2">Pickup</span>
                                                @error('in_pickup')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_envio_nacional" autofocus class="my-2 @error('in_envio_nacional') is-invalid @enderror" id="in_envio_nacional"> <span class="font-costo my-2">Envio Nacional</span>
                                                @error('in_envio_nacional')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_delivery" autofocus class="my-2 @error('in_delivery') is-invalid @enderror" id="in_delivery"> <span class="font-costo my-2">Delivery</span>
                                                @error('in_delivery')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_envio_gratis" autofocus class="my-2 @error('in_envio_gratis') is-invalid @enderror" id="in_envio_gratis"> <span class="font-costo my-2">Envio gratis</span>
                                                @error('in_envio_gratis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_fragil" autofocus class="my-2 @error('in_fragil') is-invalid @enderror" id="in_fragil"> <span class="font-costo my-2">Es frágil</span>
                                                @error('in_fragil')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_offer" class="my-2 @error('in_offer') is-invalid @enderror" id="in_offer"> <span class="font-costo my-2">En Oferta</span>
                                                @error('in_offer')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Caracteristica del paquete -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">                                            
                                                <input type="checkbox" wire:model.defer="state.in_pedido" autofocus class="my-2 @error('in_pedido') is-invalid @enderror" id="in_pedido"> <span class="font-costo my-2">En pedido</span>
                                                @error('in_pedido')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_por_encargo" autofocus class="my-2 @error('in_por_encargo') is-invalid @enderror" id="in_envio_gratis"> <span class="font-costo my-2">Por Encargo</span>
                                                @error('in_por_encargo')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="checkbox" wire:model.defer="state.in_valido" autofocus class="my-2 @error('in_valido') is-invalid @enderror" id="in_valido"> <span class="font-costo my-2">Es Valido</span>
                                                @error('in_valido')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="/listProducts/{{$comercio->id}}" type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</a>
                            <button type="submit" class="btn btn-app">
                                <i class="fa fa-save mr-1"></i>
                                @if($controlActivity)
                                <span>Guardar Cambios</span>
                                @else
                                <span>Guardar</span>
                                @endif
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    
        <script>

            window.onpageshow = function() {

                window.addEventListener('sendSubcategories', event => {
                    
                    let subcategories = event.detail.subcategories

                    let subcategory = event.detail.subcategory

                    let msg = event.detail.msg

                    let select = document.querySelector('.subcategory')
                    
                    select.innerHTML = ''

                    var option = `<option value="0">${msg}</option>`
                    
                    subcategories.forEach(function(numero) {
                        
                        if(numero['name'] == subcategory){
                            option += `<option value="${numero['id']}" selected>${numero['name']}</option>`
                        }else{
                            option += `<option value="${numero['id']}">${numero['name']}</option>`
                        }
                        
                    });
                    
                    select.innerHTML = option
                
                }) 
            }
        </script>
</div>


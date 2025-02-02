<?php

namespace App\Http\Livewire\Afiliado\Product\Repuestoexpres;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

use App\Models\Area;
use App\Models\Comercio;
use App\Models\Manufacturer;
use App\Models\Modelo;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Supplier;


class NewProductRE extends AdminComponent
{
    use WithFileUploads;
    
    public $comercio_id;
    public $comercio;
    public $product_id;
    public $product;
    public $editModal;
    public $controlActivity = true;
    public $state = [];
    public $seccion = 0;
    public $categoria;
    public $categorias = [];
    public $manufacturer;
    public $manufacturers = [];
    public $models = [];
    public $categories = [];

    public $photo1;
    public $photo2;
    public $photo3;
    public $photo4;

    public function mount($comercioId, $productId, $editModal )
    {
        $this->comercio_id = $comercioId;
        $this->product_id = $productId;
        $this->editModal = $editModal;

        // dd($this->showEditModal);

        if($editModal == 'false'){
            $this->controlActivity = false;
            $this->state['in_delivery'] = false;
            $this->state['container_id'] = "0";
            $this->comercio = Comercio::find($this->comercio_id);
            $this->state['area_id'] = $this->comercio->area_id;
            $this->state['in_pedido'] = "0";
            $this->state['in_envio_gratis'] = "0";
            $this->state['in_offer'] = "0";
            $this->state['in_fragil'] = "0";
            $this->state['in_por_encargo'] = "0";
            $this->state['in_valido'] = "1";
            $this->state['ca_valoracion'] = "5";
        }else{
            $this->product = Product::find($this->product_id);
            
		    $this->state = $this->product->toArray();
            
            $this->state['in_pedido'] = $this->checkear($this->state['in_pedido']);
            $this->state['in_pickup'] = $this->checkear($this->state['in_pickup']);
            $this->state['in_delivery'] = $this->checkear($this->state['in_delivery']);
            $this->state['in_envio_nacional'] = $this->checkear($this->state['in_envio_nacional']);
            $this->state['in_envio_gratis'] = $this->checkear($this->state['in_envio_gratis']);
            $this->state['in_offer'] = $this->checkear($this->state['in_offer']);
            $this->state['in_fragil'] = $this->checkear($this->state['in_fragil']);
            $this->state['in_por_encargo'] = $this->checkear($this->state['in_por_encargo']);
            $this->state['in_valido'] = $this->checkear($this->state['in_valido']);
            $this->state['in_combo'] = $this->checkear($this->state['in_combo']);

        }

        $this->manufacturers = collect();
        $this->models = collect();
        $this->categories = collect();
        
    }

    public function updatedSeccion($value)
    {
        switch ($value) {
            case '1':
                $this->categories = Category::where('comercio_id', $this->comercio_id)->where('ruta', 'like', '%'.'carro'.'%')->get();
                $this->manufacturers = Category::where('comercio_id', $this->comercio_id)->where('category_id', 1)->get();
                break;
            
            case '2':
                $this->categories = Category::where('comercio_id', $this->comercio_id)->where('ruta', 'like', '%'.'moto'.'%')->get();
                $this->manufacturers = Category::where('comercio_id', $this->comercio_id)->where('category_id', 11)->get();
                break;

        }
    }
    public function updatedManufacturer($value)
    {
        $this->models = Category::where('comercio_id', $this->comercio_id)->where('category_id', $value)->get();
    }

    public function checkear($value)
    {
        switch ($value) {
            case '0':
                return false;
                break;
            case '1':
                return true;
                break;
        }
    }

    public function changeCategory($categoryId, $subcategory)
	{	
		$subcategories = Subcategory::where('category_id', $categoryId)->get();	

		if($subcategories->count() > 0){
			$msg = 'Seleccione una opción';
			$this->state['subcategory_id'] = 0;
		}else{
			$msg = 'No posee Subcategoria';
			$this->state['subcategory_id'] = 0;
		}

        $this->skipRender();
        		
		$this->dispatchBrowserEvent('sendSubcategories', ['subcategories' => $subcategories, 'subcategory' => $subcategory, 'msg' => $msg]);
	}

    public function createProduct()
	{
        $validatedData = Validator::make($this->state, [
            'code_lote' => 'nullable',
            'code' => 'required',
			'name' => 'required',
            'area_id' => 'required|not_in:0',
            'category_id' => 'required|not_in:0',
            'model_id' => 'nullable',
            'details1' => 'nullable',
            'details2' => 'nullable',
            'description' => 'nullable',
            'price1' => 'required',
            'price2' => 'nullable',
            'price_offer' => 'nullable',
            'price_divisa' => 'nullable',
            'stock_min' => 'nullable',
            'stock_max' => 'nullable',
            'stock' => 'nullable',            
            'supplier_id' => 'required|not_in:0',
            'tx_peso' => 'nullable',
            'tx_tamanio' => 'nullable',
            'tx_presentacion' => 'nullable',
            'fe_expedicion' => 'nullable',
            'madein' => 'nullable',
            'in_pedido' => 'nullable',
            'in_cart'  => 'nullable',
            'in_pickup'  => 'nullable',
            'in_envio_nacional' => 'nullable',
            'in_delivery' => 'nullable',            
            'in_envio_gratis' => 'nullable',
            
            'in_offer' => 'nullable',
            'in_fragil' => 'nullable',
            'in_por_encargo' => 'nullable',
            'ca_valoracion' => 'nullable',
            'in_valido' => 'nullable',
		])->validate();

        $filename = $validatedData['code'].'-'.$this->comercio_id;

		if ($this->photo1) {
            // $validatedData['avatar'] = $this->photo->store('/', 'avatarscomercios');
			$validatedData['image_path1'] = $this->photo1->storeAs(null,
                $filename . '-1.png', 'avatarsproducts'
            );     
		}
        if ($this->photo2) {
			//$validatedData['image_path1'] = $this->photo->store('/', 'avatarsproducts');
            $validatedData['image_path2'] = $this->photo2->storeAs(null,
                $filename . '-1.png', 'avatarsproducts'
            ); 
		}
        if ($this->photo3) {
			//$validatedData['image_path1'] = $this->photo->store('/', 'avatarsproducts');
            $validatedData['image_path3'] = $this->photo3->storeAs(null,
                $filename . '-1.png', 'avatarsproducts'
            ); 
		}
        if ($this->photo4) {
			//$validatedData['image_path1'] = $this->photo->store('/', 'avatarsproducts');
            $validatedData['image_path4'] = $this->photo4->storeAs(null,
                $filename . '-1.png', 'avatarsproducts'
            ); 
		}

        $comercio = Comercio::find($this->comercio_id);

        $validatedData['user_id'] = $comercio->user_id;
        $validatedData['userCreated_at'] = auth()->user()->id;
        $validatedData['userUpdated_at'] = auth()->user()->id;
        $validatedData['comercio_id'] = $this->comercio_id;
        $validatedData['manufacturer_id'] = $this->manufacturer;        

		Product::create($validatedData);

		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Producto agregado satisfactoriamente!']);

        return redirect()->route('listProducts', ['comercioId' => $this->comercio_id, ] );
	}

    public function updateProduct()
	{
        $validatedData = Validator::make($this->state, [
            'code_lote' => 'nullable',
            'code' => 'required',
			'name' => 'required',
            'area_id' => 'required|not_in:0',
            'category_id' => 'required|not_in:0',
            'model_id' => 'nullable',
            'details1' => 'nullable',
            'details2' => 'nullable',
            'description' => 'nullable',
            'price1' => 'required',
            'price2' => 'nullable',
            'price_offer' => 'nullable',
            'price_divisa' => 'nullable',
            'stock_min' => 'nullable',
            'stock_max' => 'nullable',
            'stock' => 'nullable',            
            'supplier_id' => 'required|not_in:0',
            'tx_peso' => 'nullable',
            'tx_tamanio' => 'nullable',
            'tx_presentacion' => 'nullable',
            'fe_expedicion' => 'nullable',
            'madein' => 'nullable',
            'in_pedido' => 'nullable',
            'in_cart'  => 'nullable',
            'in_pickup'  => 'nullable',
            'in_envio_nacional' => 'nullable',
            'in_delivery' => 'nullable',            
            'in_envio_gratis' => 'nullable',
            
            'in_offer' => 'nullable',
            'in_fragil' => 'nullable',
            'in_por_encargo' => 'nullable',
            'ca_valoracion' => 'nullable',
            'in_valido' => 'nullable',
		])->validate();

        
        $filename = $validatedData['code'].'-'.$this->comercio_id;

        if ($this->photo1) {
            // $validatedData['avatar'] = $this->photo->store('/', 'avatarscomercios');
			if (Storage::disk('avatarsproducts')->exists($this->product->image_path1)) {
				Storage::disk('avatarsproducts')->delete($this->product->image_path1);
			}
			$validatedData['image_path1'] = $this->photo1->storeAs(null,
                $filename . '-1.png', 'avatarsproducts'
            );     
		}

        $validatedData['manufacturer_id'] = $this->manufacturer;  
        $this->product->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Producto actualizado satisfactoriamente!']);
    }

    public function render()
    {
        $areas = Area::all();
        $this->comercio = Comercio::find($this->comercio_id);
        $suppliers = Supplier::where('comercio_id', $this->comercio_id)->get();
        
        return view('livewire.afiliado.product.repuestoexpres.new-product-r-e', [
            'areas' => $areas,
            'suppliers' => $suppliers,            
        ]);
    }
}

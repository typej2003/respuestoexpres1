<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Comercio;
use App\Models\Product;
use App\Models\Setting;
use App\Models\SettingComercio;

class ViewDetails extends AdminComponent
{
    public $product_id;

    public $currencyValue;

    public $is_cart = false;    

    public function mount($productId)
    {
        $this->product_id = $productId;

        $product = Product::find($this->product_id);

        if($product->in_cart == 0)
        {
            $this->is_cart = $this->product_id;
        }
        
        $this->currencyValue = request()->cookie('currency');
    }
    public function cambiarSrc($src)
    {
        $this->dispatchBrowserEvent('addSrc', ['src' => $src]);
    }

    public function render()
    {
        $product = Product::find($this->product_id);
        $comercio = Comercio::find($product->comercio_id);
        
        $setting = SettingComercio::where('comercio_id', $comercio->id)->first();
        
        if($setting == null)
        {
            $setting = SettingComercio::where('comercio_id', 1)->first();
        }        
        
        return view('livewire.afiliado.view-details', [
            'product' => $product,
            'comercio' => $comercio,
            'in_cellphonecontact' => $setting->in_cellphonecontact,
            'in_sliderprincipal' => $setting->in_sliderprincipal,
            'in_marcasproductos' => $setting->in_marcasproductos,
        ]);
    }
}

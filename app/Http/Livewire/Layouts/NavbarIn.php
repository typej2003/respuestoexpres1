<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\Comercio;
use App\Models\SettingComercio;

class NavbarIn extends Component
{
    public $totalQuantityCart = 0;

    public $currencyValue = 'Bs';

    public $comercio_id;   

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;

        $this->currencyValue = request()->cookie('currency');
    }

    public function render()
    {
        $comercio = Comercio::find($this->comercio_id);

        $settingComercio = SettingComercio::where('comercio_id', $this->comercio_id)->first();
        
        $this->totalQuantityCart = \Cart::getTotalQuantity();

        return view('livewire.layouts.navbar-in', [
            'comercio' => $comercio,
            'in_cellphonecontact' => $settingComercio->in_cellphonecontact,
        ]);
    }
}

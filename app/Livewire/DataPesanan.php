<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class DataPesanan extends Component
{

    public $search = '';
    public function render()
    {
        $orders = Customer::latest()->where('nama', auth()->user()->nama)->where('jml_bawang', 'like', '%'.$this->search.'%')->get();


        return view('livewire.data-pesanan')->with([
            'orders' => $orders
        ]);
    }
}

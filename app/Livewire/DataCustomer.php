<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class DataCustomer extends Component
{
    public $search = '';
    public function render()
    {
        $customers = Customer::latest()->where('nama', 'like', '%' . $this->search . '%')->orWhere('no_wa', 'like', '%' . $this->search . '%')->get();
        return view('livewire.data-customer')->with([
            'customers' => $customers
        ]);
    }
}

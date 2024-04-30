<?php

namespace App\Livewire;

use App\Models\Bawang;
use Livewire\Component;

class DataBawang extends Component
{
    public $search = '';

    public function render()
    {
        $onions = Bawang::latest()->where('hrg_bawang', 'like', '%' . $this->search . '%')->orWhere('jml_bawang', 'like', '%' . $this->search . '%')->get();
        return view('livewire.data-bawang')->with([
            'onions' => $onions
        ]);
    }
}

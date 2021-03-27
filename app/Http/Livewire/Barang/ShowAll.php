<?php

namespace App\Http\Livewire\Barang;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\barang_model;

class ShowAll extends Component
{
    use WithPagination;

    public $readyToLoad = false;

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.barang.show-all', ['barang' => barang_model::paginate(6)]);
    }
}

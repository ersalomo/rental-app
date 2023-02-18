<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithPagination};
use App\Models\Car;

class TableCar extends Component
{
    use WithPagination;
    protected $bootstrapTheme  = 'bootstrap4';

    public function render()
    {
        return view('livewire.table-car', [
            'cars' => Car::paginate(20),
        ]);
    }
}

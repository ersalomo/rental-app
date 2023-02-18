<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithPagination, WithFileUploads};
use App\Models\Car;

class AddNewCar extends Component
{
    use WithFileUploads, WithPagination;
    public $car_name, $car_price, $car_desc, $car_type, $car_picture, $iteration;
    public $rules = [
        'car_name' => ['required'],
        'car_price' => ['required'],
        'car_desc' => ['required'],
        'car_type' => ['required'],
        'car_picture' => 'image|max:1024', // 1MB Max
    ];
    public function render()
    {
        return view('livewire.add-new-car');
    }
    public function addNewCar()
    {
        $car = $this->validate();
        $filename = $this->car_picture->getFilename();
        $this->car_picture->storeAs('cars/images/', $filename);
        $car['car_picture'] = $filename;
        Car::create($car);
        $this->car_picture = null;
        $this->iteration++;
        $this->showToastr();
        $this->reset();
    }

    public function showToastr()
    {
        return $this->dispatchBrowserEvent('showToastr', [
            'type' => 'success',
            'message' => 'Berhasil menambah data'
        ]);
    }
}

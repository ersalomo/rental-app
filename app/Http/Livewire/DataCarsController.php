<?php

namespace App\Http\Livewire;

use Livewire\{
    Component,
    WithPagination,
    WithFileUploads
};
use App\Models\Car;

class DataCarsController extends Component
{
    use WithPagination, WithFileUploads;

    protected $bootstrapTheme  = 'bootstrap4';
    public string $mode = 'data';
    public $car_name, $car_price, $car_desc, $car_type, $car_picture, $iteration;
    public Car $edit_car;
    public $rules = [
        'car_name' => ['required'],
        'car_price' => ['required'],
        'car_desc' => ['required'],
        'car_type' => ['required'],
        'car_picture' => 'image|max:1024', // 1MB Max
    ];
    public bool $isModeAdd = true;

    public function mount()
    {
        $this->isModeAdd = true;
        $mode = request()->query('mode', 'data');
        $this->mode = $mode;
    }
    public function addNewCar()
    {
        $this->isModeAdd = true;
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
    public function editCar()
    {
        $data_car = $this->validate();
        $car = Car::findOrFail($this->edit_car->id)->update($data_car);
        if ($car) {
            $this->reset();
            $this->mode = 'data';
            $this->isModeAdd = true;
            $this->edit_car = null;
            $this->showToastr();
        }
        $this->showToastr(
            type: 'error',
            message: 'There was an error saving data'
        );
    }

    public function showToastr(string $type = 'success', string $message = 'Berhasil menambah data')
    {
        return $this->dispatchBrowserEvent('showToastr', [
            'type' => $type,
            'message' => $message
        ]);
    }
    public function delete(Car $car)
    {
        // if ($car->delete()) {
        //     $this->showToastr();
        // }

        $this->showToastr(
            message: 'Delete data success'
        );
        // $this->showToastr(
        //     type: 'error',
        //     message: 'Error while deleting data!'
        // );
    }

    public function render()
    {
        if ($this->mode == 'edit') {
            $id = request()->query('id_car');
            if ($id) {
                $this->edit_car = Car::findOrFail($id);
                $this->car_name = $this->edit_car->car_name;
                $this->car_price = $this->edit_car->car_price;
                $this->car_desc = $this->edit_car->car_desc;
                $this->car_type = $this->edit_car->car_type;
                $this->isModeAdd = false;
            }
            return view('livewire.car.add');
        }
        if ($this->mode == 'add') {
            return view('livewire.car.add');
        }
        return view('livewire.car.cars', ['cars' => Car::paginate(20)]);
    }
}

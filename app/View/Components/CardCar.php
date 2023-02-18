<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\{Car};

class CardCar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public Car $car;
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-car');
    }
}

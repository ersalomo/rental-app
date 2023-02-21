<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Car};

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public int $perpage = 15;
    public function __invoke(Request $request)
    {
        return view('content.main', [
            'cars' => Car::paginate($this->perpage),
        ]);
    }
    public function t()
    {
    }
}

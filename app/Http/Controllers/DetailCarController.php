<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Car};

class DetailCarController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $car = Car::findOrFail($request->query('car'));
        return view('content.detail', [
            'car' => $car,
        ]);
    }
}

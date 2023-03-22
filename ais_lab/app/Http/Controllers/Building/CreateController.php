<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
//use App\Http\Resources\BuildingResource;

class CreateController extends Controller
{
    public function __invoke()
    {

        return view('building.create');
    }
}

<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Building;

class CreateController extends Controller
{
    public function __invoke()
    {
        $buildings = Building::all();
        return view('job.create', compact('buildings'));
    }
}

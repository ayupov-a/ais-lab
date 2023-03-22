<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Job;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __invoke()
    {
        $jobs = Job::all();
        $buildings = Building::all();


        return view('job.index', compact('jobs', 'buildings'));
    }
}

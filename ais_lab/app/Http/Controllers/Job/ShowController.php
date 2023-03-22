<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        return(Job::find($id));
    }
}

<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Job;

class CreateController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::all();
        return view('member.create', compact('jobs'));
    }
}

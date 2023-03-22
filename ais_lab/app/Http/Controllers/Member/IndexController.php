<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Member;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __invoke()
    {
        $members = Member::all();
        $jobs = Job::all();
        return view('member/index', compact('members', 'jobs'));
    }
}

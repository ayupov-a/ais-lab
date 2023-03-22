<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        Job::find($id)->delete();

        return redirect()->route('job.index')->with('success', 'Поле удалено');
    }
}

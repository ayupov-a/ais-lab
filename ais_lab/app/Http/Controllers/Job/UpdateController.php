<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\UpdateRequest;
use App\Models\Job;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Job $job)
    {

        $data = $request->validated();

        $job->update($data);

        return redirect()->route('job.index')->with('success', 'Данные успешно изменены');
    }
}

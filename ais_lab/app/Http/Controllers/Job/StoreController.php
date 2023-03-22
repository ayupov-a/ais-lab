<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\StoreRequest;
use App\Models\Job;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $job = Job::create($data);

        return [
            "status" => 200,
            "data" => $job,
            "message" => "New job created",
        ];
    }
}

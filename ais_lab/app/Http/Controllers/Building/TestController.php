<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\TestRequest;
use App\Models\Building;

class TestController extends Controller
{
    public function __invoke(TestRequest $request, $id)
    {
        $data = $request->validated();
        $building = Building::find($id);

        $building->update($data);

        return [
            "status" => 200,
            "message" => "City title updated"
        ];

    }
}

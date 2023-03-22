<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\UpdateRequest;
use App\Http\Resources\BuildingResource;
use App\Models\Building;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Building $building)
    {

        $data = $request->validated();

        $building->update($data);
        return redirect()->route('building.index')->with('success', 'Строение успешно изменено');
    }
}

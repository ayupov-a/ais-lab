<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\StoreRequest;
use App\Models\Building;
use GuzzleHttp\Psr7\Request;
/**
 * @SWG\Store(
 *     path="/buildings",
 *     summary="Store new building",
 *     tags={"Building"},
 *     description="Store new building",
 *     @SWG\Response(
 *         response=200,
 *         description="successful operation",
 *         @SWG\Schema(ref="#/definitions/Building"),
 *     ),
 *     @SWG\Response(
 *         response="401",
 *         description="Uncaught error",
 *     ),
 *     @SWG\Response(
 *         response="404",
 *         description="Building is not found",
 *     )
 * )
 */
class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Building::create($data);

        return redirect()->route('building.index')->with('success', 'Строение успешно создано');
    }
}

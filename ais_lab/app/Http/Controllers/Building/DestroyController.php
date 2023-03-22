<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Models\Building;
/**
 * @SWG\Delete(
 *     path="/buildings/{id}",
 *     summary="Delete building by ID",
 *     tags={"Building"},
 *     description="Delete building by ID",
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

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $building = Building::find($id)->delete();
        return redirect()->route('building.index')->with('success', 'Поле удалено');

//        return [
//            "status" => 1,
//            "data" => $building,
//            "msg" => "Building deleted successfully"
//        ];
    }
}

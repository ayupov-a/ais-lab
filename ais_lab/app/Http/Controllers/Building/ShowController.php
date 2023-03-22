<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Models\Building;

/**
 * @OA\Get(
 *     path="/buildings/{id}",
 *     operationId="buildingsShowController",
 *     summary="Get building by ID",
 *     tags={"Buildings"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Building id",
 *         required=true,
 *         @OA\Schema(
 *              type="integer"
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *     ),
 *     @OA\Response(
 *         response="401",
 *         description="Uncaught error",
 *     ),
 *     @OA\Response(
 *         response="404",
 *         description="Building is not found",
 *     ),
 *     @OA\Response(
 *         response="500",
 *         description="Server failed",
 *     )
 * )
 */
class ShowController extends Controller
{
    public function __invoke($id)
    {
        return(Building::find($id));
    }
}

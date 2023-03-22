<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Models\Building;
use http\Url;
use Illuminate\Http\Request;

/**
 * @OA\Get (
 *     path="/buildings",
 *     operationId="buildingsIndexController",
 *     tags={"Buildings"},
 *     summary="Get list of all buildings",
 *     @OA\Response(
 *          response="200",
 *          description="List of all buildings get successfully"
 *      ),
 *      @OA\Response(
 *          response="500",
 *          description="Server side error"
 *      )
 * )
 */
class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __invoke()
    {
        $buildings = Building::all();
        return view('building.index', compact('buildings'));
    }
}

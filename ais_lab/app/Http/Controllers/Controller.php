<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info (
 *     title = "AIS Project documentation",
 *     version = "1.0.0",
 *
 *)
 * @OA\Tag (
 *     name="Buildings",
 *     description="Object in which the work will be performed",
 *     )
 * @OA\Tag (
 *     name="Members",
 *     description="Work participants",
 *     )
 * @OA\Tag (
 *     name="Job",
 *     description="Work to be done",
 *     )
 * @OA\Server (
 *     description="AIS Project server",
 *     url="http://127.0.0.1:8000/api",
 *     )
 **/
class Controller extends BaseController
{

    use AuthorizesRequests, ValidatesRequests;
}

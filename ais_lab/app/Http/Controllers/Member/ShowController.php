<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        return(Member::find($id));
    }
}

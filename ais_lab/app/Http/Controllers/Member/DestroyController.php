<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        Member::find($id)->delete();

        return redirect()->route('member.index')->with('success', 'Поле удалено');
    }
}

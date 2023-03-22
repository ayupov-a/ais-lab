<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Http\Requests\Member\StoreRequest;
class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Member::create($data);

        return redirect()->route('member.index')->with('success', 'Участник успешно добавлен');
    }
}

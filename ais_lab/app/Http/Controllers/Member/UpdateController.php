<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\UpdateRequest;
use App\Models\Member;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Member $member)
    {

        $data = $request->validated();

        $member->update($data);

        return redirect()->route('member.index')->with('success', 'Данные успешно изменены');
    }
}

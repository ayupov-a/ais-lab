<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(Member::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $member = Member::create($request->all());

        return [
            "status" => 1,
            "data" => $member
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return [
            "status" => 1,
            "data" =>$member
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $member->update($request->all());

        return [
            "status" => 1,
            "data" => $member,
            "msg" => "Member updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return [
            "status" => 1,
            "data" => $member,
            "msg" => "Member deleted successfully"
        ];
    }
}

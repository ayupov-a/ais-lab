<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings = Building::all();

        return [
            "status" => 1,
            "data" => $buildings
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required',
        ]);

        $building = Building::create($request->all());

        return [
            "status" => 1,
            "data" => $building,
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Building $building)
    {
        return [
            "status" => 1,
            "data" =>$building
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function edit(Building $building)
//    {
//        return view('buildings.edit',compact('building'));
//    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Building $building)
    {
        $request->validate([
            'city' => 'required',
        ]);

        $building->update($request->all());

        return [
            "status" => 1,
            "data" => $building,
            "msg" => "Blog updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Building $building)
    {
        $building->delete();

        return [
            "status" => 1,
            "data" => $building,
            "msg" => "Blog deleted successfully"
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(Job::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('jobs.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $job = Job::create($request->all());

        return [
            "status" => 1,
            "data" => $job
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return [
            "status" => 1,
            "data" => $job
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
//        return view('jobs.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $job->update($request->all());

        return [
            "status" => 1,
            "data" => $job,
            "msg" => "Job updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return [
            "status" => 1,
            "data" => $job,
            "msg" => "Job deleted successfully"
        ];
    }
}

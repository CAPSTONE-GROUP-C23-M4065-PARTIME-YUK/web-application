<?php

namespace App\Http\Controllers;

use App\Models\jobSeeker;
use App\Http\Requests\StorejobSeekerRequest;
use App\Http\Requests\UpdatejobSeekerRequest;

class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejobSeekerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejobSeekerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function show(jobSeeker $jobSeeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function edit(jobSeeker $jobSeeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejobSeekerRequest  $request
     * @param  \App\Models\jobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejobSeekerRequest $request, jobSeeker $jobSeeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobSeeker $jobSeeker)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Employers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getUserId = Employers::where('user_id', Auth::user()->id)->first();
        $joblist = Job::where('employer_id', $getUserId->id)->select('*')->get();
        $numbtable = 1;
        return view('jobs.index', compact(['joblist', 'numbtable']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cekprofil = Employers::where('user_id', Auth::user()->id)->first();
        return view('jobs.create-job', compact(['cekprofil']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        $data = $request->all();
        Job::create($data);
        return Redirect::route('job.index')->with('message', 'Berhasil menambah lowongan parttime baru.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('jobs.edit-job', compact(['job']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $data = $request->all();
        Job::find($job->id)->update($data);
        return Redirect::route('job.index')->with('message', 'Berhasil memperbarui lowongan parttime.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return Redirect::route('job.index')->with('message', 'Berhasil menghapus lowongan parttime.');
    }
}

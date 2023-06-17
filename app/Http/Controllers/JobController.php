<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Application;
use App\Models\Employers;
use GuzzleHttp\Psr7\Request;
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
        if ($getUserId === null) {
            return Redirect::route('employer.create')->with('message', 'Lengkapi profil perusahaan Anda terlebih dahulu melalui form di bawah ini sebelum mengakses halaman "Data Lowongan".');
        } else {
            $joblist = Job::where('employer_id', $getUserId->id)->select('*')->get();
            $numbtable = 1;
            return view('jobs.index', compact(['joblist', 'numbtable']));
        }
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

    public function allJobs()
    {
        $data = Job::join('employers', 'employers.id', '=', 'jobs.employer_id')->select('jobs.*', 'employers.*')->get();
        $numb = 1;
        // dd($data);
        return view('jobs.all-jobs', compact(['data', 'numb']));
    }

    public function detailJob($id)
    {
        $job = Job::find($id);
        $jobWithEmployer = Job::join('employers', 'employers.id', '=', 'jobs.employer_id')
            ->where('jobs.id', $id)
            ->select('jobs.*', 'employers.*')
            ->first();
        // dd($jobWithEmployer);
        return view('jobs.detail-jobs', compact('jobWithEmployer'));
    }
}

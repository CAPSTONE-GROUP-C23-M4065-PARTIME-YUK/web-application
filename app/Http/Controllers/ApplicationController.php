<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;

use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numb = 1;
        $data = Application::where('job_seeker_id', Auth::user()->jobSeeker->id)
        ->join('jobs', 'applications.job_id', '=', 'jobs.id')
        ->join('employers', 'jobs.employer_id', '=', 'employers.id')
        ->select('applications.*', 'jobs.*', 'employers.*')
        ->get();
        return view('jobseeker.save-loker', compact('data', 'numb'));
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
     * @param  \App\Http\Requests\StoreApplicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicationRequest $request)
    {
        $jobSeekerId = auth()->user()->jobSeeker->id;
        $applicationData = $request->all();
            $applicationData['job_seeker_id'] = $jobSeekerId;

            Application::create($applicationData);



        return redirect()->route('save.loker')->with('message', 'Berhasil melamar pekerjaan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicationRequest  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicationRequest $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
    $data = Application::find($application->id);
    $data->delete();

        return redirect()->route('save.loker')->with('message', 'Berhasil menghapus lamaran.');
    }
}

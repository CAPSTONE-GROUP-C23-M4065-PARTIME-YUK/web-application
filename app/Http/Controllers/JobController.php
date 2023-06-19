<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Application;
use App\Models\Employers;
use App\Models\JobCategory;
use App\Models\Regency;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\AboutUs;
use App\Models\ContactUs;



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
            $joblist = Job::join('job_category', 'job_category.id', '=', 'jobs.job_category_id')->where('employer_id', $getUserId->id)->select('jobs.*', 'job_category.category')->get();
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
        $jobcategory = JobCategory::orderBy('category', 'asc')->get();
        $cekprofil = Employers::where('user_id', Auth::user()->id)->first();
        return view('jobs.create-job', compact(['cekprofil', 'jobcategory']));
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
        $jobcategory = JobCategory::orderBy('category', 'asc')->get();
        return view('jobs.edit-job', compact(['job', 'jobcategory']));
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

    public function allJobs(HttpRequest $request)
    {
        $searchByTitle = $request->input('search-by-title');
        $searchByLocation = $request->input('search-by-location');
        $searchByCategory = $request->input('search-by-category');

        $getregency = Regency::all();
        $getcategory = JobCategory::all();

        if ($searchByTitle) {
            $data = Job::join('employers', 'employers.id', '=', 'jobs.employer_id')->join('job_category', 'job_category.id', '=', 'jobs.job_category_id')->select('jobs.*', 'employers.company_name', 'employers.company_logo', 'employers.company_province', 'employers.company_regency', 'job_category.category')
            ->when($searchByTitle, function ($query, $searchByTitle) {
                return $query->where('jobs.title', 'like', '%' . $searchByTitle . '%');
            })
            ->when($searchByLocation, function ($query, $searchByLocation) {
                return $query->where('employers.company_regency', 'like', '%' . $searchByLocation . '%');
            })
            ->when($searchByCategory, function ($query, $searchByCategory) {
                return $query->where('job_category.category', 'like', '%' . $searchByCategory . '%');
            })
            ->get();
            return view('jobs.all-jobs', compact(['data', 'getregency', 'getcategory']));
        } else {
            $data = Job::join('employers', 'employers.id', '=', 'jobs.employer_id')->join('job_category', 'job_category.id', '=', 'jobs.job_category_id')->select('jobs.*', 'employers.company_name', 'employers.company_logo', 'employers.company_province', 'employers.company_regency', 'job_category.category')->get();
            return view('jobs.all-jobs', compact(['data', 'getregency', 'getcategory']));
        }
    }

    public function detailJob($id)
    {
        $job = Job::find($id);
        $jobWithEmployer = Job::join('employers', 'employers.id', '=', 'jobs.employer_id')
            ->join('job_category', 'job_category.id', '=', 'jobs.job_category_id')
            ->where('jobs.id', $id)
            ->select('jobs.*', 'employers.company_name','employers.company_logo','employers.company_website','employers.company_email','employers.company_phone','employers.company_description','employers.company_regency','employers.company_address', 'job_category.category')
            ->first();
        // dd($jobWithEmployer);
        return view('jobs.detail-jobs', compact('jobWithEmployer'));
    }

    public function about() {
        return view('about.index');
    }

    public function contact() {
        return view('contact.index');
    }

    public function createContact(StoreContactUsRequest $request) {
        $data = $request->all();
        ContactUs::create($data);
        return Redirect::route('contact')->with('message', 'Kami Akan Membalas Pertanyaan Anda Melalui Email.');
    }
}

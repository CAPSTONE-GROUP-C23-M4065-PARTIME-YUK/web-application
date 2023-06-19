<?php

namespace App\Http\Controllers;

use App\Models\Employers;
use App\Models\Job;
use App\Models\jobSeeker;
use App\Models\User;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalPengguna = User::count();
        $totalEmployers = User::where('role', 'employer')->count();
        $totalJobSeekers = User::where('role', 'jobseeker')->count();
        $totalJobs = Job::count();
        return view('server-side.dashboard', compact([
            'totalPengguna', 'totalEmployers', 'totalJobSeekers', 'totalJobs'
        ]));
    }

    public function dataPengguna() {
        $dataPengguna = User::latest()->paginate(2);
        return view('admin.user.index', compact([
            'dataPengguna'
        ]));
    }

    public function dataEmployers() {
        $dataEmployers = Employers::join('users', 'employers.user_id', '=', 'users.id')
        ->select('employers.*', 'users.name', 'users.email')
        ->paginate(2);
        return view('admin.employer.index', compact([
            'dataEmployers'
        ]));
    }

    public function detailEmployers($id) {
        $dataEmployer = Employers::find($id);

        return view('admin.employer.detail', compact([
            'dataEmployer'
        ]));

    }

    public function dataJobSeekers() {
        $dataJobSeekers = jobSeeker::join('users', 'job_seekers.user_id', '=', 'users.id')
        ->select('job_seekers.*', 'users.name', 'users.email')
        ->paginate(2);
        return view('admin.jobseeker.index', compact([
            'dataJobSeekers'
        ]));
    }

    public function detailDataJobSeekers($id) {
        $dataJobSeeker = jobSeeker::join('users', 'job_seekers.user_id', '=', 'users.id')
        ->select('job_seekers.*', 'users.name', 'users.email')
        ->find($id);

        return view('admin.jobseeker.detail', compact([
            'dataJobSeeker'
        ]));
    }

    public function dataJobs() {
        $dataJobs = Job::join('employers', 'jobs.employer_id', '=', 'employers.id')
        ->join('job_category', 'jobs.job_category_id', '=', 'job_category.id')
        ->select('jobs.*', 'employers.company_name', 'employers.company_email', 'job_category.category')
        ->paginate(2);
        return view('admin.job.index', compact([
            'dataJobs'
        ]));
    }

    public function detailDataJobs($id) {
        $job = Job::find($id);
        $jobWithEmployer = Job::join('employers', 'employers.id', '=', 'jobs.employer_id')
            ->join('job_category', 'job_category.id', '=', 'jobs.job_category_id')
            ->where('jobs.id', $id)
            ->select('jobs.*', 'employers.*', 'job_category.category')
            ->first();

        return view('admin.job.detail', compact([
            'job', 'jobWithEmployer'
        ]));
    }

    public function contactUs() {
        $dataContact = ContactUs::all();
        return view('admin.contact.index', compact([
            'dataContact'
        ]));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Employers;
use App\Models\Job;
use App\Models\jobSeeker;
use App\Models\User;
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
        $dataPengguna = User::all();
        return view('admin.user.index', compact([
            'dataPengguna'
        ]));
    }

    public function dataEmployers() {
        $dataEmployers = Employers::all();
        return view('admin.employer.index', compact([
            'dataEmployers'
        ]));
    }

    public function dataJobSeekers() {
        $dataJobSeekers = jobSeeker::all();
        return view('admin.jobseeker.index', compact([
            'dataJobSeekers'
        ]));
    }

    public function dataJobs() {
        $dataJobs = Job::all();
        return view('admin.job.index', compact([
            'dataJobs'
        ]));
    }
}

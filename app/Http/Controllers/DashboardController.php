<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalPengguna = User::count();
        $totalEmployers = User::where('role', 'employer')->count();
        $totalJobSeekers = User::where('role', 'jobseeker')->count();
        return view('server-side.dashboard', compact([
            'totalPengguna', 'totalEmployers', 'totalJobSeekers'
        ]));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\jobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserJobSeekerController extends Controller
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
        return view ('user.jobseeker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jobseeker::create([
            'user_id' => Auth::user()->id,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'resume' => $request->resume,
        ]);
        return redirect()->route('profile.jobseeker')->with('success', 'Profile Job Seeker berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function jobSeekerProfile()
    {
        $data = DB::table('users')
            ->join('job_seekers', 'users.id', '=', 'job_seekers.user_id')
            ->select('users.*', 'job_seekers.*')
            ->where('users.id', '=', Auth::user()->id)
            ->get();
        
        return view('user.jobseeker.profile', ['data' => $data]);
    }

    public function resume()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('job_seekers', 'users.id', '=', 'job_seekers.user_id')
            ->select('users.*', 'job_seekers.*')
            ->where('users.id', '=', $user->id)
            ->get();
    
        return view('user.jobseeker.resume', compact('data', 'user'));
    }
    
    public function uploadResume(Request $request)
    {
        $data = Auth::user()->jobSeeker;
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;

        if ($request->hasFile('resume')) {
            $resumeFile = $request->file('resume');
            $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
            $resumePath = $request->file('resume')->storeAs('resumes', $resumeFileName, 'public');
            $data->resume = $resumePath;
        }
    

        $data->save();

        return redirect()->route('profile.jobseeker')->with('success', 'Resume berhasil diupload');
    }

    public function downloadResume($id)
    {
        $data = JobSeeker::find($id);
        $pathToFile = public_path('storage/' . $data->resume);
        return response()->download($pathToFile);
    }

}

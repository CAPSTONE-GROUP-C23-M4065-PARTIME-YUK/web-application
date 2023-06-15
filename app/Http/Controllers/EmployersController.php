<?php

namespace App\Http\Controllers;

use App\Models\Employers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEmployersRequest;
use App\Http\Requests\UpdateEmployersRequest;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Support\Facades\Redirect;


class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.employer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cekprofil = Employers::where('user_id', Auth::user()->id)->first();
        if ($cekprofil !== null) {
            return Redirect::route('profile.employer');
        } else {
            $getprovinsi = Province::all();
            $getkota = Regency::all();
            return view('employer.create-profile', compact([
                'getprovinsi', 'getkota'
            ]));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployersRequest $request)
    {
        $data = $request->all();
        
        $company_logo = $data['company_logo'];
        $filename = strtolower(Auth::user()->id . time() . '-' . $company_logo->getClientOriginalName());
        $destinationPath = public_path('images/employers-logo');
        $company_logo->move($destinationPath, $filename);
        $data['company_logo'] = strtolower(Auth::user()->id . time() . '-' . $company_logo->getClientOriginalName());

        Employers::create($data);
        return Redirect::route('profile.employer')->with('message', 'Berhasil memperbarui profile.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function show(Employers $employers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function edit($employers)
    {
        $employers = Employers::find($employers);
        return view('admin.employer.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployersRequest  $request
     * @param  \App\Models\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployersRequest $request, Employers $employers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function destroy($employers)
    {
        $employers = Employers::find($employers);
        dd($employers);
    }

    public function profile()
    {
        $cekprofil = Employers::where('user_id', Auth::user()->id)->first();
        return view('employer.profile', compact([
            'cekprofil'
        ]));
    }
}

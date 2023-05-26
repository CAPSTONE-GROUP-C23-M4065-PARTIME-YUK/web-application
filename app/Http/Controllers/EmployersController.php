<?php

namespace App\Http\Controllers;

use App\Models\Employers;
use App\Http\Requests\StoreEmployersRequest;
use App\Http\Requests\UpdateEmployersRequest;

class EmployersController extends Controller
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
     * @param  \App\Http\Requests\StoreEmployersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployersRequest $request)
    {
        //
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
    public function edit(Employers $employers)
    {
        //
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
    public function destroy(Employers $employers)
    {
        //
    }
}

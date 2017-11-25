<?php

namespace App\Http\Controllers;

use App\hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(hobby $hobby)
    {
        return $hobby;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(hobby $hobby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hobby $hobby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(hobby $hobby)
    {
        //
    }
}

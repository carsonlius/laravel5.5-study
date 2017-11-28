<?php

namespace App\Http\Controllers;

use App\hobby;
use Illuminate\Http\Request;
use Facades\App\Services\Weibo;
use App\Events\HobbyWasPublished;

class HobbyController extends Controller
{

    public function showFacade()
    {
        Weibo::publish('facades 在控制器中的使用');
    }
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
        return view('hobbys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\HobbyStoreRequest $request)
    {


       $result = \App\hobby::create($request->toArray());
       $hobby_last = $result->toArray();
       // event(new HobbyWasPublished($hobby_last)); 单个触发的事件

        // return redirect('/hobby/' . $hobby_last['id']);
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
     * Remove the specified resource from .
     *
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(hobby $hobby)
    {
        //
    }
}

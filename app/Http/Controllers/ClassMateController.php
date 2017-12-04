<?php

namespace App\Http\Controllers;

use App\ClassMate;
use Illuminate\Http\Request;

class ClassMateController extends Controller
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
     * @param  \App\ClassMate  $classMate
     * @return \Illuminate\Http\Response
     */
    public function show(ClassMate $classMate)
    {

        // acl 监测当前同学是不是登录用户的同学 两种方案 而在balde里面可以单独使用 @can标签 

        \Auth::loginUsingId("57");
        // $this->authorize("show-classmate", $classMate);
        // if (\Gate::denies('show-classmate', $classMate)) {
        //     abort("403", "sorry this content is not allowed to show for you");
        // }
        
        return view("classmates.show")->with(compact('classMate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassMate  $classMate
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassMate $classMate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassMate  $classMate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassMate $classMate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassMate  $classMate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassMate $classMate )
    {
        //
    }
}

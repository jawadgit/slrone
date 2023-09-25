<?php

namespace App\Http\Controllers;


use App\Models\SaveThisSearch;
use Illuminate\Http\Request;

class SaveThisSearchController extends Controller
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
        return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaveThisSearch  $saveThisSearch
     * @return \Illuminate\Http\Response
     */
    public function show(SaveThisSearch $saveThisSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaveThisSearch  $saveThisSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(SaveThisSearch $saveThisSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaveThisSearch  $saveThisSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaveThisSearch $saveThisSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaveThisSearch  $saveThisSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaveThisSearch $saveThisSearch)
    {
        //
    }
}

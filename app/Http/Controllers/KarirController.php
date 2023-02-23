<?php

namespace App\Http\Controllers;

use App\Karir;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('karir.karir');
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
     * @param  \App\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function show(Karir $karir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function edit(Karir $karir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karir $karir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karir $karir)
    {
        //
    }
}

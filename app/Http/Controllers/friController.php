<?php

namespace App\Http\Controllers;

use App\fri;
use Illuminate\Http\Request;

class friController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return fri::all();
         
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
     * @param  \App\fri  $fri
     * @return \Illuminate\Http\Response
     */
    public function show(fri $fri)
    {
            // $fri->airline;
            // $fri->arrival;
            // $fri->depature;
            // $fri->load('airline');
        $fri['maskapai'] = $fri->airline->LONG_NAME;
        $fri['keberangkatan'] = $fri->depature->LONG_NAME;
        $fri['kedatangan'] = $fri->arrival->LONG_NAME;
        return  $fri;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fri  $fri
     * @return \Illuminate\Http\Response
     */
    public function edit(fri $fri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fri  $fri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fri $fri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fri  $fri
     * @return \Illuminate\Http\Response
     */
    public function destroy(fri $fri)
    {
        //
    }
}

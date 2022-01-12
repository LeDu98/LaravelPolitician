<?php

namespace App\Http\Controllers;

use App\Models\PoliticalParty;
use Illuminate\Http\Request;

class PoliticalPartyRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(PoliticalParty::all(),'200');
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
        $input=$request->all();
        $political_party= PoliticalParty::create($input);
        return response()->json($political_party,'200');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliticalParty  $politicalParty
     * @return \Illuminate\Http\Response
     */
    public function show(PoliticalParty $politicalParty)
    {
        return response()->json($politicalParty,'200');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliticalParty  $politicalParty
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliticalParty $politicalParty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoliticalParty  $politicalParty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliticalParty $politicalParty)
    {
        $input=$request->all();
        $politicalParty->update($input);
        return response()->json($politicalParty,'200');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliticalParty  $politicalParty
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliticalParty $politicalParty)
    {
        $politicalParty->delete();
        return response()->json('ok','200');
    }
}

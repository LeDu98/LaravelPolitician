<?php

namespace App\Http\Controllers;

use App\Models\Politician;
use Illuminate\Http\Request;

class PoliticianRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Politician::all(),'200');
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
        $politician=Politician::create($input);
        return response()->json($politician,'200');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function show(Politician $politician)
    {
        return response()->json($politician,'200');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function edit(Politician $politician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Politician $politician)
    {
        $input=$request->all();
        $politician->update($input);
        return response()->json($politician,'200');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Politician $politician)
    {
        $politician->delete();
        return response()->json('ok','200');
    }
}

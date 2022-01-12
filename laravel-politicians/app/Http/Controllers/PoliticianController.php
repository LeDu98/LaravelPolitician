<?php

namespace App\Http\Controllers;

use App\Models\PoliticalParty;
use App\Models\Politician;
use Illuminate\Http\Request;

class PoliticianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $politician=Politician::all();
        $polical_party=PoliticalParty::all();
        return view('politician',['politician'=>$politician,'political_party'=>$polical_party]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input=$request->all();
        $polical_party= Politician::create($input);
        return redirect('/politician');
    }

   
    public function delete(Request $request,$id)
    {
        $politician=Politician::find($id);
        if(isset($_POST['delete'])){
            $politician->delete();
        }
        return redirect('/politician');
    }
}

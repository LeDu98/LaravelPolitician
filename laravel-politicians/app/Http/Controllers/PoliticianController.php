<?php

namespace App\Http\Controllers;

use App\Http\Resources\PoliticianCollection;
use App\Http\Resources\PoliticianResource;
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
        return view('politician', ['politician' => new PoliticianCollection($politician), 'political_party' => $polical_party]);
    }

    public function index()
    {
        $politicians = Politician::all();
        return $politicians;
    }

    public function store(Request $request)
    {

        $politician = Politician::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'political_party_id' => $request->political_party_id
        ]);

        return $politician;

    }



    public function show(Politician $politician)
    {


        return new PoliticianResource($politician);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input=$request->all();
        $politician = Politician::create($input);
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

    public function update(Request $request, $id)
    {
        $politician = Politician::find($id);
        $input = $request->all();
        $politician->update($input);

        return $politician;
    }
}

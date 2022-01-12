<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\PoliticalParty;
use Illuminate\Http\Request;

class PoliticalPartyController extends Controller
{
    public function all(){
        $political_parties = PoliticalParty::all();
        return view('political_parties',['political_parties'=>$political_parties]);
    }
    public function search(){
        $political_parties = PoliticalParty::all();
        return view('search',['political_parties'=>$political_parties]);
    }

    public function create(Request $request){
        $input=$request->all();
        $political_party= PoliticalParty::create($input);
        return redirect('/political_parties');
    }
    public function edit($id){
        $political_party = PoliticalParty::find($id);
        $countries = Country::all();
        return view('political_party',['political_party'=>$political_party,'countries'=>$countries]);
    }
    public function update(Request $request,$id){
        $political_party=PoliticalParty::find($id);
            $input=$request->all();
            $political_party->update($input);
        
        return redirect('/political_parties');
    }
    public function delete(Request $request,$id){
        $political_party=PoliticalParty::find($id);
        $political_party->delete();
        return redirect('/political_parties');
    }
}

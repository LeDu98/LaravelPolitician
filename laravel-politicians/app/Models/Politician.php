<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politician extends Model
{
    use HasFactory;

    protected $fillable=['first_name','last_name','gender','political_party_id'];

    public function political_party(){
        return $this->belongsTo(PoliticalParty::class);
    }
}

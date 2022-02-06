<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;


    //visualiser les liste de categorie element depuis ici
    public function prodview()
    {
        return $this->belongsTo(Produits::class,'produits_id');
    }



}

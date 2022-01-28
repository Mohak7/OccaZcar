<?php

namespace App\Models;

use App\Models\Produits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photoproduits extends Model
{
    use HasFactory;


    public function photo(){
        return $this->belongsTo(Produits::class,'produits_id');
    }



    //on va creer un scope
    public function scopePhotovoiture($query, $id, $limite=NULL)
    {
        return $query->where('produits_id',$id)
//            ->with('photo')
            ->limit($limite)
            ->get();
    }

}

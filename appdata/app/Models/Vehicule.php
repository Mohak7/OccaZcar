<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicule extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;



    public function cateviewone()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function modelecaroneview()
    {
        return $this->belongsTo(Modelecar::class,'modelecar_id');
    }

    public function annonceoneview()
    {
        return $this->belongsTo(Annonce::class,'annonce_id');
    }

    public function couleuroneview()
    {
        return $this->belongsTo(Couleur::class,'couleur_id');
    }





}

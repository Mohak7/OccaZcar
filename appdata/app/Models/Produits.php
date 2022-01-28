<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Productcouleur;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;


    //visualiser les liste de categorie element depuis ici
    public function Categorieviews()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    //visualiser les liste de couleur element depuis ici
    public function couleurvoiture()
    {
        return $this->belongsTo(Productcouleur::class,'productcouleur_id');
    }

    public function photovoiture()
    {
        return $this->hasMany(Photoproduits::class,'produits_id');
    }










}

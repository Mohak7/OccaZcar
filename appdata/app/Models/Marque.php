<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marque extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;


    //acces au modelcar depuis ici
    public function modeleviewsmarque()
    {
        return $this->hasMany(Modelecar::class);
    }

    //ce commanade passe par le helper pour afficher les marques selon l'id ce commande ce fait en un seule sens
    //en claire on utilise le one to one 
    public function scopeMarqueview($query, $id){
        return $query->where('id',$id)
                    ->get();
    }



}

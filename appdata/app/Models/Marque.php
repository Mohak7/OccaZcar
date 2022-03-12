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



}

<?php

namespace App\Models;

use App\Models\Produits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;



//     public function produitscate()
//    {
//        return $this->hasMany(Produis::class);
//    }






}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modelecar extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;


    //visualiser les liste de categorie element depuis ici

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marquesviews()
    {
        return $this->belongsTo(Marque::class,'marque_id');
    }



}

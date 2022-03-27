<?php
use Illuminate\Support\Arr;
//On peut ecrire tous les fonction necessaire pour notre projet

//affichages des images depuis une models




if(!function_exists('photovoiturehelp')){
    function photovoiturehelp($id, $limite=NULL){
        return  App\Models\Photoproduits::Photovoiture($id, $limite);
    }
}


if(!function_exists('marquevoiturehelp')){
    function marquevoiturehelp($id){
        return  App\Models\Marque::Marqueview($id);
    }
}





?>

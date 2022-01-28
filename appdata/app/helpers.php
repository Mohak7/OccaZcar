<?php
//On peut ecrire tous les fonction necessaire pour notre projet

//affichages des images depuis une models
if(!function_exists('photovoiturehelp')){
    function photovoiturehelp($id, $limite=NULL){
        return  App\Models\Photoproduits::Photovoiture($id, $limite);
    }
}





?>

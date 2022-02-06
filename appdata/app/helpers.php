<?php
use Illuminate\Support\Arr;
//On peut ecrire tous les fonction necessaire pour notre projet

//affichages des images depuis une models




if(!function_exists('photovoiturehelp')){
    function photovoiturehelp($id, $limite=NULL){
        return  App\Models\Photoproduits::Photovoiture($id, $limite);
    }
}

//liste des carburant
if(!function_exists('carburanhelp')){
    function carburanhelp($key=NUll){

        $array = [
            '1' => 'Essence',
            '2' => 'Diesel',
            '3' => 'GPL',
        ];

        //SIn on ne passe pas de id dans cette eleemnt
        if($key == NULL){
            return $array;
        }else{
           //On appelle la function
            return arraysearch($key,$array);
        }

    }
}


//liste des Transmission
if(!function_exists('transmissionhelp')){
    function transmissionhelp($key=Null){
        $array = [
            "1" => 'Boite Manuelle',
            "2" => 'Automatique'
        ];

        //SIn on ne passe pas de id dans cette eleemnt
        if($key == NULL){
            return $array;
        }else{
            //On appelle la function
            return arraysearch($key,$array);
        }


    }
}

//liste des nbrvitessehelp
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
if(!function_exists('nbrvitessehelp')){
    function nbrvitessehelp($key=NULL){
        $array = [
            "1" => '4',
            "2" => '5',
            "3" => '6'
        ];
        //SIn on ne passe pas de id dans cette eleemnt
        if($key == NULL){
            return $array;
        }else{
            //On appelle la function
            return arraysearch($key,$array);
        }

    }
}





//liste des nbrecylindrehelp
if(!function_exists('nbrecylindrehelp')){
    function nbrecylindrehelp($key=NULL){
        $array = [
            "1" => '4',
            "2" => '6',
            "3" => '8'
        ];
        //SIn on ne passe pas de id dans cette eleemnt
        if($key == NULL){
            return $array;
        }else{
            //On appelle la function
            return arraysearch($key,$array);
        }
    }
}





//liste des nbrportiereno
if(!function_exists('nbrportierenohelp')){
    function nbrportierenohelp($key=NULL){
        $array = [
            "1" => '4',
            "2" => '2'
        ];
        //SIn on ne passe pas de id dans cette eleemnt
        if($key == NULL){
            return $array;
        }else{
            //On appelle la function
            return arraysearch($key,$array);
        }
    }
}


//liste des nbrsiergehelp
if(!function_exists('nbrsiergehelp')){
    function nbrsiergehelp($key=NULL){
        $array = [
            "1" => '4',
            "2" => '5',
            "3" => '6',
            "4" => '8'
        ];
        //SIn on ne passe pas de id dans cette eleemnt
        if($key == NULL){
            return $array;
        }else{
            //On appelle la function
            return arraysearch($key,$array);
        }
    }
}

//liste des consommationhelp
if(!function_exists('consommationhelp')){
    function consommationhelp($key=NULL){
        $array = [
            "1" => 'Electrique',
            "2" => 'Moteur',
        ];
        //SIn on ne passe pas de id dans cette eleemnt
        if($key == NULL){
            return $array;
        }else{
            //On appelle la function
            return arraysearch($key,$array);
        }
    }
}




//creation de la fonction de recherche de l'id array
function arraysearch($key, $array){
    //si on trouve une valeur passer pour cette element
    $slice= Arr::only($array, $key);//on fait une recherche
    //on convertir array en string ou chaine de caractaire
    foreach ($slice as $value){
        return $value;
    }
}



?>

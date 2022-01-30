<?php
//On peut ecrire tous les fonction necessaire pour notre projet

//affichages des images depuis une models
if(!function_exists('photovoiturehelp')){
    function photovoiturehelp($id, $limite=NULL){
        return  App\Models\Photoproduits::Photovoiture($id, $limite);
    }
}

//liste des carburant
if(!function_exists('carburanhelp')){
    function carburanhelp(){
        $array = [
            "1" => "Essence",
            "2" => "Diesel",
            "3" => "GPL",
        ];
        return $array;

    }
}


//liste des Transmission
if(!function_exists('transmissionhelp')){
    function transmissionhelp(){
        $array = [
            "1" => 'Boite Manuelle',
            "2" => 'Automatique'
        ];
        return $array;

    }
}

//liste des nbrvitessehelp
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
if(!function_exists('nbrvitessehelp')){
    function nbrvitessehelp(){
        $array = [
            "1" => '4',
            "2" => '5',
            "3" => '6'
        ];
        return $array;

    }
}
//liste des nbrecylindrehelp
if(!function_exists('nbrecylindrehelp')){
    function nbrecylindrehelp(){
        $array = [
            "1" => '4',
            "2" => '6',
            "3" => '8'
        ];
        return $array;
    }
}

//liste des nbrportiereno
if(!function_exists('nbrportierenohelp')){
    function nbrportierenohelp(){
        $array = [
            "1" => '4',
            "2" => '2'
        ];
        return $array;
    }
}


//liste des nbrsiergehelp
if(!function_exists('nbrsiergehelp')){
    function nbrsiergehelp(){
        $array = [
            "1" => '4',
            "2" => '5',
            "3" => '6',
            "4" => '8'
        ];
        return $array;
    }
}

//liste des consommationhelp
if(!function_exists('consommationhelp')){
    function consommationhelp(){
        $array = [
            "1" => 'Electrique',
            "2" => 'Moteur',
        ];
        return $array;
    }
}





?>

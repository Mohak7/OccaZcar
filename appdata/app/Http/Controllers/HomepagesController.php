<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Photoproduits;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //randue de la vue de l'index
    public function index(){
      //  $catelist = Categorie::where('name_cat','ok')->get();
        /* $list = Vehicule::all();
        Price::where('status',1)
                        ->get();,compact('list')*/



        return view('publicpages\homepage');
    }



    //afficher les details de la voiture
    public function cardetail(Request $request){
        dd($request->id);
    }



    //randu de la vue de about
    public function about(){
        return view('publicpages\aboutpage');
    }

    //randu de la vue de contact
    public function contact(){
        return view('publicpages\contactpage');
    }


}

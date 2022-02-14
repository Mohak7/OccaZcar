<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photoproduits;
use App\Models\Price;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //la vue de l'index
    public function index(){
        $catelist = Category::where('status',1)->get();
        $list = Price::where('status',1)
                        ->get();
        return view('publicpages\homepage',compact('catelist','list'));
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

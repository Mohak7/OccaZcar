<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photoproduits;
use App\Models\Price;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    public function categorylist(){
        $catelist = Category::where('status',1)->get();
        return $catelist;
    }
    //randue de la vue de l'index
    public function index(){
        $catelist = $this->categorylist();
        // $list = Price::where('status',1)->get();
        return view('publicpages\homepage',compact('catelist'));
    }


    //afficher les details de la voiture
    public function cardetail(Request $request){
        dd($request->id);
    }



    //randu de la vue de about
    public function about(){
        $catelist = $this->categorylist();
        return view('publicpages\aboutpage' ,compact('catelist'));
    }

    //randu de la vue de contact
    public function contact(){
        $catelist = $this->categorylist();
        return view('publicpages\contactpage' ,compact('catelist'));
    }


}

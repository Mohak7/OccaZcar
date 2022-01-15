<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //randue de la vue de l'index
    public function index(){
        $catelist = Category::where('status',1)->get();
        //dd($catelist);

        return view('publicpages\homepage',compact('catelist'));
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

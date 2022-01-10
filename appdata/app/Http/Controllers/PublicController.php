<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //affichage de la page Index
    public function index(){

      $cateliste = Category::Where('status',1)
                ->get();
      return view('publicpages\home',compact(['cateliste']));
    }





}

<?php

namespace App\Http\Controllers;

use App\Models\Photoproduits;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$catelist = Produits::orderBy('updated_at', 'desc')->get();
      $catelist = Produits::with('Categorieviews')
                            ->with('couleurvoiture')
                            //->orderBy('updated_at', 'desc')
                            ->orderBy('id', 'ASC')
                            ->paginate(10);

      return view('admpages/produits/liste',compact('catelist'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admpages/produits/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show(Produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produits $produits)
    {
        //
    }
}

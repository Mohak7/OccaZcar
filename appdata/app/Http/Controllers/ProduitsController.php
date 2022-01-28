<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photoproduits;
use App\Models\Productcouleur;
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
        $catelist = Category::Where('status',1)->get();

        $colors = Productcouleur::Where('status',1)->get();


        return view('admpages/produits/new',compact('catelist','colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifier si le categorie exite et tous les teste neccessaire

        //nos message a renvoyer en cas d'erreur
        $messages = [
            'category_id.required'    => 'Le champ categorie ne peut etre vide.',
            'marque.required'    => 'Le champ marque ne peut etre vide.',
            'carburant.required'    => 'Le champ Carburant ne peut etre vide.',
            'productcouleur_id.required'    => 'Le champ Couleur ne peut etre vide.',
        ];

        //verification et envoie des message
        $request->validate([
            'category_id' => 'required',
            'marque' => 'required',
            'productcouleur_id' => 'required',
            'carburant' => 'required'
        ],$messages);

        dd($request->all());


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

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
            'transmission.required'    => 'Le champ Transmission ne peut etre vide.',
            'modele.required'    => 'Le champ Modele ne peut etre vide.',
            'puissancemonteur.required'    => 'Le champ puissancemonteur ne peut etre vide.',
            'nbrvitesse.required'    => 'Le champ nbrvitesse ne peut etre vide.',
            'nbrecylindre.required'    => 'Le champ nbrecylindre ne peut etre vide.',
            'nbrportiereno.required'    => 'Le champ nbrportiereno ne peut etre vide.',
            'nbrsierge.required'    => 'Le champ nbrsierge ne peut etre vide.',
            'annecar.required'    => 'Le champ annecar ne peut etre vide.',
        ];

        //verification et envoie des message
        $request->validate([
            'category_id' => 'required',
            'marque' => 'required',
            'productcouleur_id' => 'required',
            'carburant' => 'required',
            'transmission' => 'required',
            'modele' => 'required',
            'puissancemonteur' => 'required',
            'nbrvitesse' => 'required',
            'nbrecylindre' => 'required',
            'nbrportiereno' => 'required',
            'nbrsierge' => 'required',
            'annecar' => 'required',
        ],$messages);

        //Insertion des donnees dans la base de donnee
        $prod= new Produits();

        $prod->category_id = $request->category_id;
        $prod->marque = $request->marque;
        $prod->modele= $request->modele;
        $prod->productcouleur_id= $request->productcouleur_id;
        $prod->consommation= $request->consommation;
        $prod->carburant= $request->carburant;
        $prod->transmission= $request->transmission;
        $prod->nbrsierge= $request->nbrsierge;
        $prod->nbrvitesse= $request->nbrvitesse;
        $prod->puissancemonteur= $request->puissancemonteur;
        $prod->nbrecylindre= $request->nbrecylindre;
        $prod->chassis= $request->chassis;
        $prod->nbrkm= $request->nbrkm;
        $prod->nbrportiereno= $request->nbrportiereno;
        $prod->annecar= $request->annecar;
        $prod->mordetails= $request->mordetails;
        $prod->status= Null;
        $prod->save();

        //apres la sauvegardes des informations on recupere l'id
        //pour l'evoyer a le view pour ajout des images
        $id = $prod->id;

        //redirection vers cette page pour ajout des images
        return redirect()->route('showprod',$id);




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Produits $produits)
    {
        //on recuperes plusieur elements pour l'ajour des images
        //apres chaque ajout on l'envoie vers cette lien
        //comme cette commande va aussi ce repeter dans l'edit
        //on vas le placer dans une include pour ne pas avoir de repetition

        //On va plutot faire une mise a jour par seccion en utilisan le modal de bootstrap
        //Affichages des Elements
        //------de la table Produits
        //------de la Tabale Couleur
        //------de la Table Categories
        $prod = Produits::where('id',$request->produit)
                        ->with('couleurvoiture')
                        ->with('Categorieviews')
                        ->get();

        $img = photovoiturehelp($request->produit);

        return view('admpages/produits/view',compact('prod','img'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produits)
    {
//        $catelist = Category::Where('status',1)->get();
//        $colors = Productcouleur::Where('status',1)->get();
//        return view('admpages/produits/edit',compact('catelist','colors'));
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
        //NOs mise a jours
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

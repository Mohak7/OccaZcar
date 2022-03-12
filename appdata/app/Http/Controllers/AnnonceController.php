<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonce = Annonce::orderBy('updated_at', 'desc')->paginate(10);
        return view ('admpages/annonces/liste',compact('annonce'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admpages/annonces/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifier si lexite et tous les teste neccessaire
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'codeannonce.required'    => 'Le champ Nom ne peut etre vide.',
            'codeannonce.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'codeannonce.min'    => 'ne dois pas inferieur a 4 caractere',
            'codeannonce.numeric'    => 'Ceci n\'est pas un nombre ou chiffre.',

        ];

        //verification et envoie des message
        $request->validate([
            'codeannonce' => 'numeric|required|unique:annonces|min:4',
        ],$messages);


        //insertion de nouvelle de donnee
        $color= new Annonce();
        $color->codeannonce = $request->codeannonce;
        $color->status = $request->status;
        $color->save();
        //redirection vers la page liste
        return redirect()->route('listeannonce');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        return view ('admpages/annonces/edit',compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        //verifier si lexite et tous les teste neccessaire
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'codeannonce.required'    => 'Le champ Nom ne peut etre vide.',
            'codeannonce.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'codeannonce.min'    => 'ne dois pas inferieur a 4 caractere',
            'codeannonce.numeric'    => 'Ceci n\'est pas un nombre ou chiffre.',

        ];
        //$ann= Annonce::where('id', $annonce->id)->get();


        // cas on veux update que le status
        if($annonce->codeannonce == $request->codeannonce AND $annonce->status != $request->status){
            //on fait la mise a jour que du status
            $annonce->update(['status' => $request->status]);
            return redirect()->route('listeannonce');
        }
        //cas on veux update le code
        elseif ($annonce->codeannonce != $request->codeannonce AND $annonce->status == $request->status){
            //on fait la mise a jour de annonce
            //on verifie si le nom existe si oui on renvoie le msg d'erreur
            //verification et envoie des message
            $request->validate([
                'codeannonce' => 'numeric|required|unique:annonces|min:4',
            ],$messages);
            //si non ou fait la mise a jours
            $annonce->update([
                'codeannonce' => $request->codeannonce,
            ]);
            return redirect()->route('listeannonce');
        }
        //cas on veux update les 2
       else{
            //on fait la mise a jour des 2 elements
           //on verifie si le nom existe si oui on renvoie le msg d'erreur
           //verification et envoie des message
           $request->validate([
               'codeannonce' => 'numeric|required|unique:annonces|min:4',
           ],$messages);
           //si non ou fait la mise a jours
           $annonce->update([
               'codeannonce' => $request->codeannonce,
               'status' => $request->status
           ]);
           return redirect()->route('listeannonce');
        }










    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        Annonce::destroy($annonce->id);
        return redirect()->route('listeannonce');
    }

    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $annonce = Annonce::onlyTrashed()->paginate(10);
        return view('admpages/annonces/del', compact('annonce'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //.................dd('restauration',$request->id);
        Annonce::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listeannonce');
    }



    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //..............dd('delete', $request->id);
        Annonce::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listeannonce');
    }









}

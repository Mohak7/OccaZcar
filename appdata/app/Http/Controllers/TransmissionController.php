<?php

namespace App\Http\Controllers;

use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tranzlist = Transmission::orderBy('updated_at', 'desc')->get();
        return view('admpages/transmission/liste',compact('tranzlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admpages/transmission/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifier si le Tansmission exite et tous les teste neccessaire

        //nos message a renvoyer en cas d'erreur
        $messages = [
            'nom_tranz.required'    => 'Le champ Nom ne peut etre vide.',
            'nom_tranz.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'nom_tranz.max'    => 'ne dois pas depasser les 255 caractere',
            'nom_tranz.min'    => 'ne dois pas inferieur a 4 caractere',
        ];

        //verification et envoie des message
        $request->validate([
            'nom_tranz' => 'required|unique:transmissions|min:4|max:255',
        ],$messages);

        //insertion de nouvelle de donnee
        $cate= new Transmission();
        $cate->nom_tranz = $request->nom_tranz;
        $cate->status = $request->status;
        $cate->save();
        //redirection vers la page liste
        return redirect()->route('listetranz');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function edit(Transmission $transmission)
    {
        return view('admpages/transmission/edit', compact('transmission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transmission $transmission)
    {
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'nom_tranz.required'    => 'Le champ Nom ne peut etre vide.',
            'nom_tranz.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'nom_tranz.max'    => 'ne dois pas depasser les 255 caractere',
            'nom_tranz.min'    => 'ne dois pas inferieur a 4 caractere',
        ];


        $cateup= Transmission::where('id', $transmission->id);



        //avans de lancer on pose une condition
        if($request->nom_tranz == $transmission->nom_tranz){
            //on faits que la mise a jour de status

            $cateup->update(['status' => $request->status]);
            return redirect()->route('listetranz');

        }else{
            //verification et envoie des message
            $request->validate([
                'nom_tranz' => 'required|unique:transmissions|min:4|max:255',
            ],$messages);

            //on fait la mise a jours de tous les elements
            $cateup->update(
                ['nom_tranz' => $request->nom_tranz],
                ['status' => $request->status],
                );
            return redirect()->route('listetranz');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transmission $transmission)
    {
        Transmission::destroy($transmission->id);
        return redirect()->route('listetranz');
    }


    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $tranzlist = Transmission::onlyTrashed()->get();
        return view('admpages/transmission/del', compact('tranzlist'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //dd($request->id);
        Transmission::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listetranz');
    }



    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //dd($request->id);
        Transmission::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listetranz');
    }










}

<?php

namespace App\Http\Controllers;

use App\Models\Carburant;
use Illuminate\Http\Request;

class CarburantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbure = Carburant::orderBy('updated_at', 'desc')->get();
        return view('admpages/carbure/liste',compact('carbure'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admpages/carbure/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifier si le nom exite et tous les teste neccessaire

        //nos message a renvoyer en cas d'erreur
        $messages = [
            'nom.required'    => 'Le champ Nom ne peut etre vide.',
            'nom.unique'    => 'Le Nom existe dans notre base de donnee.',
            'nom.max'    => 'ne dois pas depasser les 255 caractere',
            'nom.min'    => 'ne dois pas inferieur a 4 caractere',
        ];

        //verification et envoie des message
        $request->validate([
            'nom' => 'required|unique:carburants|min:4|max:255',
        ],$messages);

        //insertion de nouvelle de donnee
        $carbure= new Carburant();
        $carbure->nom = $request->nom;
        $carbure->status = $request->status;
        $carbure->save();
        //redirection vers la page liste
        return redirect()->route('listecarbure');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function edit(Carburant $carburant)
    {
        $carbure = $carburant;
        return view('admpages/carbure/edit', compact('carbure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carburant $carburant)
    {
        //verifier si le nom exite et tous les teste neccessaire

        //nos message a renvoyer en cas d'erreur
        $messages = [
            'nom.required'    => 'Le champ Nom ne peut etre vide.',
            'nom.unique'    => 'Le Nom existe dans notre base de donnee.',
            'nom.max'    => 'ne dois pas depasser les 255 caractere',
            'nom.min'    => 'ne dois pas inferieur a 4 caractere',
        ];

        $cabure= Carburant::where('id', $carburant->id);



        //avans de lancer on pose une condition
        if($request->nom == $carburant->nom){
            //on faits que la mise a jour de status

            $cabure->update(['status' => $request->status]);
            return redirect()->route('listecarbure');

        }else{
            //verification et envoie des message
            $request->validate([
                'nom' => 'required|unique:carburants|min:4|max:255',
            ],$messages);

            //on fait la mise a jours de tous les elements
            $cabure->update(
                ['nom' => $request->nom],
                ['status' => $request->status],
                );
            return redirect()->route('listecarbure');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carburant $carburant)
    {
        Carburant::destroy($carburant->id);
        return redirect()->route('listecarbure');
    }



    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $carbure = Carburant::onlyTrashed()->get();
        return view('admpages/carbure/del', compact('carbure'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //dd($request->id);
        Carburant::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listecarbure');
    }



    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //dd($request->id);
        Carburant::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listecarbure');
    }





}

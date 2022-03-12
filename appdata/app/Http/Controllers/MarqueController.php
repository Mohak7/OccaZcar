<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
use PhpParser\Node\MatchArm;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marque = Marque::withCount('modeleviewsmarque')->orderBy('updated_at', 'desc')->paginate(10);

        //dd($marque);
        return view('admpages/marques/liste',compact('marque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admpages/marques/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifier si le marque exite et tous les teste neccessaire

        //nos message a renvoyer en cas d'erreur
        $messages = [
            'nom_marque.required'    => 'Le champ Nom ne peut etre vide.',
            'nom_marque.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'nom_marque.max'    => 'ne dois pas depasser les 255 caractere',
            'nom_marque.min'    => 'ne dois pas inferieur a 4 caractere',
        ];

        //verification et envoie des message
        $request->validate([
            'nom_marque' => 'required|unique:marques|min:4|max:255',
        ],$messages);

        //insertion de nouvelle de donnee
        $cate= new Marque();
        $cate->nom_marque = $request->nom_marque;
        $cate->status = $request->status;
        $cate->save();
        //redirection vers la page liste
        return redirect()->route('listemarque');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function edit(Marque $marque)
    {
        return view('admpages/marques/edit', compact('marque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marque $marque)
    {

        //verifier si le marque exite et tous les teste neccessaire

        //nos message a renvoyer en cas d'erreur
        $messages = [
            'nom_marque.required'    => 'Le champ Nom ne peut etre vide.',
            'nom_marque.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'nom_marque.max'    => 'ne dois pas depasser les 255 caractere',
            'nom_marque.min'    => 'ne dois pas inferieur a 4 caractere',
        ];

        $cateup= Marque::where('id', $marque->id);



        //avans de lancer on pose une condition
        if($request->nom_marque == $marque->nom_marque){
            //on faits que la mise a jour de status

            $cateup->update(['status' => $request->status]);
            return redirect()->route('listemarque');

        }else{
            //verification et envoie des message
            $request->validate([
                'nom_marque' => 'required|unique:marques|min:4|max:255',
            ],$messages);

            //on fait la mise a jours de tous les elements
            $cateup->update(
                ['nom_marque' => $request->nom_marque],
                ['status' => $request->status],
                );
            return redirect()->route('listemarque');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marque $marque)
    {
        Marque::destroy($marque->id);
        return redirect()->route('listemarque');
    }

    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $marquelist = Marque::withCount('modeleviewsmarque')->onlyTrashed()->paginate(10);
        return view('admpages/marques/del', compact('marquelist'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //dd($request->id);
        Marque::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listemarque');
    }



    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //dd($request->id);
        Marque::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listemarque');
    }








}

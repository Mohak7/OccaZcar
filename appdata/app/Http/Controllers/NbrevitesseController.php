<?php

namespace App\Http\Controllers;

use App\Models\Nbrevitesse;
use Illuminate\Http\Request;
use SebastianBergmann\Timer\NoActiveTimerException;

class NbrevitesseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbrv = Nbrevitesse::orderBy('updated_at', 'desc')->get();
        return view ('admpages/nbrevitesse/liste',compact('nbrv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admpages/nbrevitesse/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifier si le data exite et tous les teste neccessaire
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'number.required'    => 'Le champ Nombre ne peut etre vide.',
            'number.unique'    => 'Le champ Nombre existe dans notre base de donnee.',
            'number.numeric'    => 'Ceci n\'est pas un nombre ou chiffre.',

            'attribut_29.required'    => 'Le champ attribut ne peut etre vide.',
            'attribut_29.unique'    => 'Le champ attribut existe dans notre base de donnee.',
            'attribut_29.max'    => 'ne dois pas depasser les 255 caractere',
        ];

        //verification et envoie des message
        $request->validate([
            'number' => 'numeric|required|unique:nbrevitesses',
            'attribut_29' => 'required|unique:nbrevitesses|max:255',
        ],$messages);

        //insertion de nouvelle de donnee
        $nbrv= new Nbrevitesse();
        $nbrv->number = $request->number;
        $nbrv->attribut_29 = $request->attribut_29;
        $nbrv->status = $request->status;
        $nbrv->save();
        //redirection vers la page liste
        return redirect()->route('listenbrv');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nbrevitesse  $nbrevitesse
     * @return \Illuminate\Http\Response
     */
    public function edit(Nbrevitesse $nbrevitesse)
    {
        $nbrv = $nbrevitesse;
        return view ('admpages/nbrevitesse/edit',compact('nbrv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nbrevitesse  $nbrevitesse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nbrevitesse $nbrevitesse)
    {
        //verifier si le data exite et tous les teste neccessaire
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'number.required'    => 'Le champ Nombre ne peut etre vide.',
            'number.unique'    => 'Le champ Nombre existe dans notre base de donnee.',
            'number.numeric'    => 'Ceci n\'est pas un nombre ou chiffre.',

            'attribut_29.required'    => 'Le champ attribut ne peut etre vide.',
            'attribut_29.unique'    => 'Le champ attribut existe dans notre base de donnee.',
            'attribut_29.max'    => 'ne dois pas depasser les 255 caractere',
        ];

        //verification et envoie des message



        $nbrs= Nbrevitesse::where('id', $nbrevitesse->id);

        //Liste de condition a mettre en place condition 1
        if($request->number == $nbrevitesse->number AND $request->attribut_29 == $nbrevitesse->attribut_29)
        {
            //on update que le status
            //dd('update le status');
            //on faits que la mise a jour de status
            $nbrs->update(['status' => $request->status]);
            return redirect()->route('listenbrv');
        }
        elseif ($request->number != $nbrevitesse->number AND $request->attribut_29 == $nbrevitesse->attribut_29)
        {
            //Dans le cas on veut update que le nombre et le status
            //----------dd('update le momnre et le status');
            //on verifie si le nom existe si oui on renvoie le msg d'erreur
            //verification et envoie des message
            $request->validate([
                'number' => 'numeric|required|unique:nbrevitesses',
            ],$messages);


            //si non ou fait la mise a jours
            $nbrs->update([
                'number' => $request->number,
                'status' => $request->status
            ]);
            return redirect()->route('editnbrv',$nbrevitesse->id);
        }
        elseif ($request->number == $nbrevitesse->number AND $request->attribut_29 != $nbrevitesse->attribut_29)
        {
            //Dans le cas on veut update que l'Attrubut et le status
            //----------------dd('update le code Attgribut et le status');
            //on verifie si le nom existe si oui on renvoie le msg d'erreur
            //si non ou fait la mise a jours
            $request->validate([
                'attribut_29' => 'required|unique:nbrevitesses|max:255',
            ],$messages);
            //si non ou fait la mise a jours
            $nbrs->update([
                'attribut_29' => $request->attribut_29,
                'status' => $request->status
            ]);
            return redirect()->route('editnbrv',$nbrevitesse->id);
        }
        elseif ($request->number != $nbrevitesse->number AND $request->attribut_29 != $nbrevitesse->attribut_29)
        {
            //Dans le cas on veut update que l'Attrubut et le status
            //----------------dd('update le code Attgribut et le status');
            //on verifie si le nom existe si oui on renvoie le msg d'erreur
            //si non ou fait la mise a jours
            $request->validate([
                'number' => 'numeric|required|unique:nbrevitesses',
                'attribut_29' => 'required|unique:nbrevitesses|max:255',
            ],$messages);
            //si non ou fait la mise a jours
            $nbrs->update([
                'number' => $request->number,
                'attribut_29' => $request->attribut_29,
                'status' => $request->status
            ]);
            return redirect()->route('editnbrv',$nbrevitesse->id);
        }
        else{
            //on renvoie vers la mem pages
            return redirect()->route('editnbrv',$nbrevitesse->id);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nbrevitesse  $nbrevitesse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nbrevitesse $nbrevitesse)
    {
        Nbrevitesse::destroy($nbrevitesse->id);
        return redirect()->route('listenbrv');
    }


    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $nbrs = Nbrevitesse::onlyTrashed()->get();
        return view('admpages/nbrevitesse/del', compact('nbrs'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //.................dd('restauration',$request->id);
        Nbrevitesse::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listenbrv');
    }



    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //..............dd('delete', $request->id);
        Nbrevitesse::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listenbrv');
    }














}

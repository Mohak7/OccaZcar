<?php

namespace App\Http\Controllers;

use App\Models\Couleur;
use Illuminate\Http\Request;

class CouleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color = Couleur::orderBy('updated_at', 'desc')->paginate(10);
        return view ('admpages/couleurs/liste',compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admpages/couleurs/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifier si le couleur exite et tous les teste neccessaire
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'name_color.required'    => 'Le champ Nom ne peut etre vide.',
            'name_color.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'name_color.max'    => 'ne dois pas depasser les 255 caractere',
            'name_color.min'    => 'ne dois pas inferieur a 2 caractere',

            'code_color.required'    => 'Le champ Nom ne peut etre vide.',
            'code_color.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'code_color.max'    => 'ne dois pas depasser les 255 caractere',
            'code_color.min'    => 'ne dois pas inferieur a 2 caractere',
        ];

        //verification et envoie des message
        $request->validate([
            'name_color' => 'required|unique:couleurs|min:2|max:255',
            'code_color' => 'required|unique:couleurs|min:2|max:255',
        ],$messages);

        //insertion de nouvelle de donnee
        $color= new Couleur();
        $color->name_color = $request->name_color;
        $color->code_color = $request->code_color;
        $color->status = $request->status;
        $color->save();
        //redirection vers la page liste
        return redirect()->route('listecolor');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function edit(Couleur $couleur)
    {
        $color = $couleur;
        return view ('admpages/couleurs/edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Couleur $couleur)
    {
        //dd($request->all(),$couleur);

        //nos message a renvoyer en cas d'erreur
        $messages = [
            'name_color.required'    => 'Le champ Nom ne peut etre vide.',
            'name_color.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'name_color.max'    => 'ne dois pas depasser les 255 caractere',
            'name_color.min'    => 'ne dois pas inferieur a 2 caractere',

            'code_color.required'    => 'Le champ Nom ne peut etre vide.',
            'code_color.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'code_color.max'    => 'ne dois pas depasser les 255 caractere',
            'code_color.min'    => 'ne dois pas inferieur a 2 caractere',
        ];

        $color= Couleur::where('id', $couleur->id);

        //Liste de condition a mettre en place condition 1
        if($request->name_color == $couleur->name_color AND $request->code_color == $couleur->code_color)
        {
            //on update que le status
            //dd('update le status');
            //on faits que la mise a jour de status
            $color->update(['status' => $request->status]);
            return redirect()->route('listecolor');
        }
        elseif ($request->name_color != $couleur->name_color AND $request->code_color == $couleur->code_color)
        {
            //Dans le cas on veut update que le nom couleur et le status
            dd('update le nom couleur et le status');
            //on verifie si le nom existe si oui on renvoie le msg d'erreur
            //si non ou fait la mise a jours
        }
        elseif ($request->name_color == $couleur->name_color AND $request->code_color != $couleur->code_color)
        {
            //Dans le cas on veut update que le code couleur et le status
            dd('update le code couleur et le status');
            //on verifie si le nom existe si oui on renvoie le msg d'erreur
            //si non ou fait la mise a jours
        }
        else{
            //on renvoie vers la mem pages
            return redirect()->route('editcolor',$couleur->id);
        }













    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Couleur $couleur)
    {
        //
    }
}

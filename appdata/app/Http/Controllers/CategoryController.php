<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catelist = Categorie::orderBy('updated_at', 'desc')->paginate(10);

        return view('admpages/category/liste',compact('catelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admpages/category/new');
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
            'namecate.required'    => 'Le champ Nom ne peut etre vide.',
            'namecate.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'namecate.max'    => 'ne dois pas depasser les 255 caractere',
            'namecate.min'    => 'ne dois pas inferieur a 4 caractere',
        ];

        //verification et envoie des message
        $request->validate([
            'namecate' => 'required|unique:categories|min:4|max:255',
        ],$messages);

        //insertion de nouvelle de donnee
        $cate= new Categorie();
        $cate->namecate = $request->namecate;
        $cate->status = $request->status;
        $cate->save();
        //redirection vers la page liste
        return redirect()->route('listecate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $category)
    {
        return view('admpages/category/view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category)
    {
        return view('admpages/category/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $category)
    {
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'namecate.required'    => 'Le champ Nom ne peut etre vide.',
            'namecate.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'namecate.max'    => 'ne dois pas depasser les 255 caractere',
            'namecate.min'    => 'ne dois pas inferieur a 4 caractere',
        ];


        $cateup= Categorie::where('id', $category->id);

        //avans de lancer on pose une condition
        if($request->namecate == $category->namecate){
            //on faits que la mise a jour de status
            $cateup->update(['status' => $request->status]);
            return redirect()->route('listecate');

        }else{
            //verification et envoie des message
            $request->validate([
                'namecate' => 'required|unique:categories|min:4|max:255',
            ],$messages);

            //on fait la mise a jours de tous les elements
            $cateup->update(
                ['namecate' => $request->namecate],
                ['status' => $request->status],
                );
            return redirect()->route('listecate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        Categorie::destroy($category->id);
        return redirect()->route('listecate');
    }

    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $catelist = Categorie::onlyTrashed()->get();
        return view('admpages/category/del', compact('catelist'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //dd($request->id);
        Categorie::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listecate');
    }


    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //dd($request->id);
        Categorie::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listecate');
    }

}

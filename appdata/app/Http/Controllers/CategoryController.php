<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $catelist = Category::orderBy('updated_at', 'desc')->paginate(10);

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
        $cate= new Category();
        $cate->namecate = $request->namecate;
        $cate->status = $request->status;
        $cate->save();
        //redirection vers la page liste
        return redirect()->route('listecate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admpages/category/view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admpages/category/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //nos message a renvoyer en cas d'erreur
        $messages = [
            'namecate.required'    => 'Le champ Nom ne peut etre vide.',
            'namecate.unique'    => 'Le champ Nom existe dans notre base de donnee.',
            'namecate.max'    => 'ne dois pas depasser les 255 caractere',
            'namecate.min'    => 'ne dois pas inferieur a 4 caractere',
        ];


        $cateup= Category::where('id', $category->id);

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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect()->route('listecate');
    }

    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $catelist = Category::onlyTrashed()->get();
        return view('admpages/category/del', compact('catelist'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //dd($request->id);
        Category::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listecate');
    }


    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //dd($request->id);
        Category::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listecate');
    }

}

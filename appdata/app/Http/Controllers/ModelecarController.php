<?php

namespace App\Http\Controllers;

use App\Models\Modelecar;
use Illuminate\Http\Request;

class ModelecarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modele = Modelecar::with('marquesviews')
                ->orderBy('updated_at', 'desc')->paginate(10);

                //dd($modele);
        return view ('admpages/modeles/liste',compact('modele'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelecar  $modelecar
     * @return \Illuminate\Http\Response
     */
    public function show(Modelecar $modelecar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelecar  $modelecar
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelecar $modelecar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelecar  $modelecar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelecar $modelecar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelecar  $modelecar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelecar $modelecar)
    {
        //
    }
}

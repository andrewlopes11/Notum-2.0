<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUnidadeAdministrativaRequest;
use App\Models\UnidadeAdministrativa;
use Illuminate\Routing\Route;

class UnidadeAdministrativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidade_administrativa = UnidadeAdministrativa::all()->sortBy('id');

        return view('unidade_administrativa.unidade_administrativa_index', ['unidade_administrativa' => $unidade_administrativa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidade_administrativa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUnidadeAdministrativaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidade_administrativa = new UnidadeAdministrativa();

        $unidade_administrativa->descricao = $request->descricao;

        $unidade_administrativa->save();

        return redirect(Route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnidadeAdministrativa  $unidadeAdministrativa
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadeAdministrativa $unidadeAdministrativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnidadeAdministrativa  $unidadeAdministrativa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidade_administrativa = UnidadeAdministrativa::findOrFail($id);

        return view('unidade_administrativa.unidade_administrativa_edit', ['unidade_administrativa'=>$unidade_administrativa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnidadeAdministrativaRequest  $request
     * @param  \App\Models\UnidadeAdministrativa  $unidadeAdministrativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $unidade_administrativa = UnidadeAdministrativa::findOrFail($request->id);

        $unidade_administrativa->descricao = $request->descricao;

        $unidade_administrativa->update();

        return redirect(Route('unidade_administrativa.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnidadeAdministrativa  $unidadeAdministrativa
     * @return \Illuminate\Http\Response
     */
    public function delete(UnidadeAdministrativa $request)
    {
        $unidade_administrativa = UnidadeAdministrativa::findOrFail($request->id);

        $unidade_administrativa->delete();

        return redirect(Route('unidade_administrativa.index'));
    }
}

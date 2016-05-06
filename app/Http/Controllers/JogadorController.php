<?php

namespace Brasil\Http\Controllers;

use Illuminate\Http\Request;

use Brasil\Http\Requests;

use Brasil\Jogador;
use Brasil\Equipe;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogadores = Jogador::all();
        
        return view('jogador.index', compact('jogadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipes = Equipe::lists('nome', 'id');
        
        return view('jogador.create', compact('equipes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jogador::create($request->all());
        
        return redirect()->route('jogador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jogador = Jogador::find($id);
        
        return view('jogador.show', compact('jogador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jogador = Jogador::find($id);
        $equipes = Equipe::lists('nome', 'id');
        
        return view('jogador.edit', compact('jogador', 'equipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Jogador::find($id)->update($request->all());
        
        return redirect()->route('jogador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jogador::find($id)->delete();
        
        return redirect()->route('jogador.index');
    }
}

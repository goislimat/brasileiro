<?php

namespace Brasil\Http\Controllers;

use Illuminate\Http\Request;

use Brasil\Http\Requests;
use Brasil\Equipe;
use Brasil\Http\Requests\EquipeRequest;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        
        return view('equipe.index', ['equipes' => $equipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipeRequest $request)
    {
        Equipe::create($request->all());
        
        return redirect('equipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipe = Equipe::find($id);
        
        return view('equipe.show', compact('equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipe = Equipe::find($id);
        
        return view('equipe.edit', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipeRequest $request, $id)
    {
        Equipe::find($id)->update($request->all());
        
        return redirect('equipes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipe::find($id)->delete();
        
        return redirect('equipes');
    }
}

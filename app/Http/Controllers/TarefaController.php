<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$tarefas = Tarefa::all();
	return view('welcome', ['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
	$req->validate(
	[
		"descricao" => "required|min:10"
	],
	[
		"required" => "campo :attribute requerido",
		"min" => "campo :attribute requer pelo menos 10 caracteres"
	]	
	);

        Tarefa::create($req->all());
	return redirect()->route('tarefa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	$tarefa = Tarefa::find($id);
	return view('show', ['tarefa' => $tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	$tarefa =  Tarefa::find($id);
	 return view("atualizar", ['tarefa' => $tarefa] );
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
        $tarefa = Tarefa::find($id);
	$tarefa->status = $request->status;
	$tarefa->descricao = $request->descricao;
	$tarefa->save();
	return redirect()->route('tarefa.index');	

	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tarefa::destroy($id);
	return redirect()->route('tarefa.index');
	
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariotable = Usuario::all();
        return view('usuarios.index', compact('usuariotable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|max:255',
            'datanascimento' => 'required|numeric',
            'telefone' => 'required|numeric',
        ]);
        $show = Usuario::create($validatedData);
        return redirect('/usuarios')->with('success', 'Dados do Usuario adicionado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuariotable = Usuario::findOrFail($id);
        return view('usuarios.show',compact('usuariotable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuariotable = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuariotable'));
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
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|max:255',
            'datanascimento' => 'required|numeric',
            'telefone' => 'required|numeric',
        ]);
        Usuario::whereId($id)->update($validatedData);
        return redirect('/usuarios')->with('success', 'Dados do Usuario atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuariotable = Usuario::findOrFail($id);
        $usuariotable->delete();
        return redirect('/usuarios')->with('success', 'Dados do Usuario removido com sucesso!');
    }
}


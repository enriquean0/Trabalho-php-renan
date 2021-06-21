<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = DB::table('produtos')->get();
        return view ('produtos.listar', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacao = $request->validate([
            'slug' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required',
            'valor' => 'required',
        ]);
        $user = [
            'slug' => $request->input('slug'),
            'descricao' => $request->input('descricao'),
            'quantidade' => $request->input('quantidade'),
            'valor' => $request->input('valor'),
        ];

        if (DB::table('produtos')->insert($user)){
            return redirect('produtos')->with('mensagem', 'Cadastrado com Sucesso!');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = DB::table('produtos')->where('id', $id)->first();
        return view ('produtos.exibir', ['produtos' => $produtos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = DB::table('produtos')->where('id', $id)->first();
        return view ('produtos.editar', ['produtos' => $produtos]);
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
        $validacao = $request->validate([
            'slug' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required',
            'valor' => 'required',
        ]);
        $user = [
            'slug' => $request->input('slug'),
            'descricao' => $request->input('descricao'),
            'quantidade' => $request->input('quantidade'),
            'valor' => $request->input('valor'),
        ];

        if (DB::table('produtos')->where('id', $id)->update($user)){
            return redirect('produtos')->with('mensagem', 'Alterado com Sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (DB::table('produtos')->where('id', $id)->delete()){
            return redirect('produtos')->with('mensagem', 'Excluido com Sucesso!');
        }
    }
}

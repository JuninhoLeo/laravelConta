<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Banco;
use Illuminate\Http\Request;

class BancosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = DB::table('bancos')->paginate(5);
        return view('bancos.index', ['bancos' => $bancos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bancos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string'
        ]);

        Banco::create($request->all());

        return redirect()
        ->route('bancos.index')
        ->with('success','Banco adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function show(Banco $banco)
    {
        return view('bancos.show', compact('banco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function edit(Banco $banco)
    {
        return view('bancos.edit', compact('banco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banco $banco)
    {
        $request->validate([
            'descricao' => 'required|string'
        ]);

        $banco->update($request->all());

        return redirect()
            ->route('bancos.index')
            ->with('success', 'Banco alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banco $banco)
    {
        $banco->delete();
        return redirect()
        ->route('bancos.index')
        ->with('success', 'Banco removido com sucesso..');
    }
}

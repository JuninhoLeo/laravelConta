<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Conta;
use Illuminate\Http\Request;

class ContasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contas = DB::table('contas')->paginate(4);
        return view('Contas.index', ['contas' => $contas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contas.create');
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
            'codbanco'   => 'required',
            'codcliente' => 'required',
            'saldo'      => 'required'
        ]);

        Conta::create($request->all());

        return redirect()
        ->route('contas.index')
        ->with('success', 'Conta criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function show(Conta $conta)
    {
        return view('contas.show', compact('conta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function edit(Conta $conta)
    {
        return view('contas.edit', compact('conta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conta $conta)
    {
        $request->validate([
            'codcliente' => 'required',
            'codbanco' => 'required',
            'saldo' => 'required'
        ]);

        $conta->update($request->all());

        return redirect()
            ->route('contas.index')
            ->with('success', 'Conta atualizada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conta $conta)
    {
        $conta->delete();
        return redirect()
        ->route('contas.index')
        ->with('success', 'Conta removida com sucesso!');
    }
}

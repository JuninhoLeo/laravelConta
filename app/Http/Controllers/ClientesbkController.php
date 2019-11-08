<?php

namespace App\Http\Controllers;

use App\Clientebk;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ClientesbkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientesbk = Clientebk::orderby('data_retirada')->get();
        return view('backup.index', compact('clientesbk'));
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
     * @param  \App\Clientebk  $clientebk
     * @return \Illuminate\Http\Response
     */
    public function show(Clientebk $clientebk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientebk  $clientebk
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientebk $clientebk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientebk  $clientebk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientebk $clientebk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientebk  $clientebk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientebk $clientebk)
    {
        //
    }
}

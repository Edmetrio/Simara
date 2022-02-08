<?php

namespace App\Http\Controllers;
use App\Models\Models\Depoimento;
use App\Models\Models\Pacote;
use App\Models\Models\Post;
use App\Models\Models\Companhia;
use App\Models\Models\Servico;


use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servico = Servico::orderBy('created_at', 'desc')->paginate(8);
        $post = Post::orderBy('created_at', 'desc')->paginate(6);
        $pacote = Pacote::orderBy('created_at', 'desc')->paginate(9);
        
        $depoimento = Depoimento::orderBy('created_at', 'desc')->get();
        $ultimo = Post::orderBy('created_at', 'desc')->paginate(4);
        $companhia = Companhia::orderBy('created_at', 'desc')->get();
        return view('inicio', compact('depoimento','pacote','post','companhia','ultimo','servico'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

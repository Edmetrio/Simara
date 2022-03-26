<?php

namespace App\Http\Controllers;
use App\Models\Models\Pacote;
use App\Models\Models\Post;
use App\Models\Models\Servico;

use Illuminate\Http\Request;

class ServicoinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacote = Pacote::orderBy('id', 'desc')->get();
        $ultimo = Post::orderBy('id', 'desc')->paginate(4);
        $servico = Servico::orderBy('id', 'desc')->get();
        return view('servicoinfo', compact('pacote','ultimo','servico'));
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
        $servic = Servico::find($id);
        $pacote = Pacote::orderBy('created_at', 'desc')->get();
        $ultimo = Post::orderBy('created_at', 'desc')->paginate(4);
        $servico = Servico::orderBy('created_at', 'desc')->get();
        $servinfo = Servico::with(['posts','pacotes'])->find($id);
        return view('servicoInfo', compact('servic','servico','pacote','ultimo','servinfo'));
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

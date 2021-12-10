<?php

namespace App\Http\Controllers;
use App\Models\Models\Depoimento;

use Illuminate\Http\Request;

class DepoimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depoimento = Depoimento::orderBy('id', 'desc')->get();
        return view('depoimento', compact('depoimento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDepoimento');
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
            'nome' => 'required',
            'posicao' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descricao' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/depoimento/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $depoimento = Depoimento::create($input);
        if($depoimento){
            $request->session()->flash('status', 'Depoimento adicionado');
            return redirect('depoimento');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('depoimento');
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
    public function edit(Depoimento $depoimento)
    {
        return view('createDepoimento', compact('depoimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depoimento $depoimento)
    {
        $request->validate([
            'nome' => 'required',
            'posicao' => 'required',
            'descricao' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/depoimento/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $depoimento->update($input);
        if($depoimento){
            $request->session()->flash('status', 'Depoimento alterado');
            return redirect('depoimento');
        }
        $request->session()->flash('status', 'Erro ao Alterar!');
        return redirect('depoimento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depoimento $depoimento, Request $request)
    {
        $depoimento->delete();
        if($depoimento){
            $request->session()->flash('status', 'Depoimento deletado');
            return redirect('depoimento');
        }
        $request->session()->flash('status', 'Erro ao Deletar!');
        return redirect('depoimento');
    }
}

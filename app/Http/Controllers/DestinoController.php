<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Destino;


class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destino = Destino::orderBy('id', 'asc')->get();
        return view('destino', compact('destino'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDestino');
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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/destino/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        if ($foto = $request->file('foto')) {
            $destino = 'assets/images/destino/foto';
            $perfil = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destino, $perfil);
            $input['foto'] = "$perfil";
        } else {
            unset($input['foto']);
        }

        $destino = Destino::create($input);
        if($destino){
            $request->session()->flash('status', 'Destino adicionado');
            return redirect('destino');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('destino');
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
    public function edit(Destino $destino)
    {
        return view('createDestino', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destino $destino)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/destino/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        if ($foto = $request->file('foto')) {
            $destino = 'assets/images/destino/foto';
            $perfil = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destino, $perfil);
            $input['foto'] = "$perfil";
        } else {
            unset($input['foto']);
        }

        $destino->update($input);
        if($destino){
            $request->session()->flash('status', 'Destino Alterado');
            return redirect('destino');
        }
        $request->session()->flash('status', 'Erro ao Alterar!');
        return redirect('destino');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destino $destino, Request $request)
    {
        $destino->delete();
        if($destino){
            $request->session()->flash('status', 'Destino Deletado');
            return redirect('destino');
        }
        $request->session()->flash('status', 'Erro ao Deletar!');
        return redirect('destino');
    }
}

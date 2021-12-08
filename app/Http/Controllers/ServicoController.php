<?php

namespace App\Http\Controllers;
use App\Models\Models\Servico;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servico = Servico::orderBy('id', 'asc')->get();
        return view('servico', compact('servico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createServico');
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
            'titulo' => 'required',
            'subtitulo' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descricao' => 'required'
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        if ($foto = $request->file('foto')) {
            $destino = 'assets/images/foto';
            $perfil = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destino, $perfil);
            $input['foto'] = "$perfil";
        } else {
            unset($input['foto']);
        }

        $servico = Servico::create($input);
        if($servico){
            $request->session()->flash('status', 'Serviço adicionado');
            return redirect('servico');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('servico');
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
    public function edit(Servico $servico)
    {
        return view('createServico', compact('servico'));       
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
        $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required'
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        if ($foto = $request->file('foto')) {
            $destino = 'assets/images/foto';
            $perfil = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destino, $perfil);
            $input['foto'] = "$perfil";
        } else {
            unset($input['foto']);
        }

        $servico = Servico::find($id)->update($input);
        if($servico){
            $request->session()->flash('status', 'Serviço Alterado');
            return redirect('servico');
        }
        $request->session()->flash('status', 'Erro ao Alterar!');
        return redirect('servico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servico $servico, Request $request)
    {
        $s = $servico->delete();
        if($s){
            $request->session()->flash('status', 'Serviço Deletado');
            return redirect('servico');
        }
        $request->session()->flash('status', 'Erro ao Deletar!');
        return redirect('servico');
    }
}

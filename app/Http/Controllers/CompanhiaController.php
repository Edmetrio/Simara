<?php

namespace App\Http\Controllers;
use App\Models\Models\Companhia;

use Illuminate\Http\Request;

class CompanhiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companhia = Companhia::orderBy('id', 'desc')->get();
        return view('companhia', compact('companhia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCompanhia');
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
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/companhia/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $companhia = Companhia::create($input);
        if($companhia){
            $request->session()->flash('status', 'Companhia adicionada');
            return redirect('companhia');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('companhia');
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
        $companhia = Companhia::find($id);
        return view('createCompanhia', compact('companhia'));
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
            'nome' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/companhia/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $companhia = Companhia::find($id)->update($input);
        if($companhia){
            $request->session()->flash('status', 'Companhia alterada');
            return redirect('companhia');
        }
        $request->session()->flash('status', 'Erro ao alterar!');
        return redirect('companhia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $companhia = Companhia::find($id)->delete();
        if($companhia){
            $request->session()->flash('status', 'Companhia deletada');
            return redirect('companhia');
        }
        $request->session()->flash('status', 'Erro ao deletar!');
        return redirect('companhia');
    }
}

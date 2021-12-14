<?php

namespace App\Http\Controllers;
use App\Models\Models\Pacote;
use App\Models\Models\Post;
use App\Models\Models\Servico;

use Illuminate\Http\Request;

class PacoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacote = Pacote::orderBy('id', 'desc')->get();
        return view('pacote', compact('pacote'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servico = Servico::with(['posts'])->orderBy('id', 'desc')->get();
        return view('createPacote', compact('servico'));
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
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reserva' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'cidade' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/pacote/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $pacote = Pacote::create($input);
        if($pacote){
            $request->session()->flash('status', 'Pacote adicionado');
            return redirect('pacote');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('pacote');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalhes = Pacote::with('servicos')->find($id);
        $pacote = Pacote::orderBy('id', 'desc')->get();
        $ultimo = Post::orderBy('id', 'desc')->paginate(4);
        $servico = Servico::orderBy('id', 'desc')->get();
        return view('detalhes', compact('detalhes','pacote','ultimo','servico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pacote = Pacote::with(['servicos'])->find($id);
        $servico = Servico::orderBy('id', 'desc')->get();
        return view('createPacote', compact('pacote','servico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacote $pacote)
    {
        $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'reserva' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'cidade' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/pacote/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $pacote->update($input);
        if($pacote){
            $request->session()->flash('status', 'Pacote adicionado');
            return redirect('pacote');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('pacote');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacote $pacote, Request $request)
    {
        $pacote->delete();
        if($pacote){
            $request->session()->flash('status', 'Pacote deletado');
            return redirect('pacote');
        }
        $request->session()->flash('status', 'Erro ao deletar!');
        return redirect('pacote');
    }
}

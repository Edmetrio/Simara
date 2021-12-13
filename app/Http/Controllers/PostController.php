<?php

namespace App\Http\Controllers;
use App\Models\Models\Post;
use App\Models\Models\Servico;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id', 'asc')->get();
        return view('post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servico = Servico::with(['posts'])->orderBy('id', 'desc')->get();
        return view('createPost', compact('servico'));
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
            'descricao' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/post/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $post = Post::create($input);
        if($post){
            $request->session()->flash('status', 'Postagem adicionada');
            return redirect('post');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('post');
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
    public function edit(Post $post)
    {
        return view('createPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required',
        ]);

        $input = $request->all();
        if ($icon = $request->file('icon')) {
            $destino = 'assets/images/post/icon';
            $perfil = date('YmdHis') . "." . $icon->getClientOriginalExtension();
            $icon->move($destino, $perfil);
            $input['icon'] = "$perfil";
        } else {
            unset($input['icon']);
        }

        $post->update($input);
        if($post){
            $request->session()->flash('status', 'Postagem Alterado');
            return redirect('post');
        }
        $request->session()->flash('status', 'Erro ao Alterar!');
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Request $request)
    {
        $post->delete();
        if($post){
            $request->session()->flash('status', 'Postagem Deletada');
            return redirect('post');
        }
        $request->session()->flash('status', 'Erro ao Deletar!');
        return redirect('post');
    }
}

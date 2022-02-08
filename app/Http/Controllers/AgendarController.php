<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Models\Post;
use App\Models\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ultimo = Post::orderBy('id', 'desc')->paginate(4);
        $servico = Servico::orderBy('id', 'desc')->get();
        return view('agenda', compact('ultimo','servico'));
    }

    public function sendEmail()
    {
        $detail = [
            'title' => 'Simara Tours Travel',
            'body' => 'Este conteúdo requerer texto.'
        ];

        Mail::to("info@simaratours.co.mz")->send(new TestMail($detail));
        return "Email Sent";
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
        /* return $request->input(); */
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'regiao' => 'required',
            'orcamento' => 'required',
        ]);
        $detail = $request->all();
        Mail::to('info@simaratours.co.mz')->send(new TestMail($detail));
        $request->session()->flash('status', 'E-mail enviado com sucesso!');
        return redirect('agenda');
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

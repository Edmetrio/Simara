<?php

namespace App\Http\Livewire;

use App\Models\Models\Cliente;
use App\Models\Models\Post;
use App\Models\Models\Servico;
use Livewire\Component;


class Clientes extends Component
{

    public $selectData = false;
    public $inputData = false;

    public $nome, $data, $telefone, $email, $descricao;
    public $edit_nome, $edit_data, $edit_telefone, $edit_email, $edit_descricao;

    public function render()
    {
        $cliente = Cliente::orderBy('created_at', 'desc')->get();
        $ultimo = Post::orderBy('id', 'desc')->paginate(4);
        $servico = Servico::orderBy('id', 'desc')->get();
        return view('livewire.clientes', compact('ultimo','servico','cliente'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store()
    {
        dd($this);
        $validateDate = $this->validate([
            'nome' => 'required',
            'data' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'descricao' => 'required',
        ]);

        dd($validateDate);
    }

}
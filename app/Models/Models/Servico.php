<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Servico extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'servico';
    protected $fillable = ['titulo','subtitulo','foto','icon','descricao','estado'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'servico_id');
    }

    public function pacotes()
    {
        return $this->hasMany(Pacote::class, 'servico_id');
    }
}

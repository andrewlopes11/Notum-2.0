<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadeAdministrativa extends Model
{
    use HasFactory;

    protected $table = 'unidade_administrativa';

    protected $fillable = ['descricao', 'setor_id'];
}

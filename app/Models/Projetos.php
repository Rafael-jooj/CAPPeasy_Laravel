<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    use HasFactory;

    protected $table = 'projetos';

    protected $fillable = ['id_user', 'titulo', 'instituicao', 'grupo', 'grande_area', 'area_sec', 'palavras_chave', 'inicio', 'termino', 'pesq_humanos', 'pesq_animais', 'local', 'financiamento', 'valor', 'instituicao_fomento', 'objetivos'];
}

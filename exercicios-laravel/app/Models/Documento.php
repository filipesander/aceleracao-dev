<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $fillable = [
        'titulo',
        'tamanho',
        'assinatura_responsavel',
        'qnt_pages'
    ];
}

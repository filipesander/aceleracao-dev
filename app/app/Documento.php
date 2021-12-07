<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'title',
        'size_document',
        'number_signature',
        'signature_responsible',
        'qtd_pages'
    ];
}

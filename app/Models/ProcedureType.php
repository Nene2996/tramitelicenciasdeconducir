<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcedureType extends Model
{
    use HasFactory;
    protected $table = 'tipos_tramite';
    protected $fillable = [
        'tipo'
    ];
}

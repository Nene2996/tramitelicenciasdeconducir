<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenceCategory extends Model
{
    use HasFactory;
    protected $table = 'categorias_licencia';
    protected $fillable = [
        'categoria'
    ];
}

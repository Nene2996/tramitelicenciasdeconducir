<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceDelivery extends Model
{
    use HasFactory;
    protected $table = 'locales_recojo';
    protected $fillable = [
        'local'
    ];
}

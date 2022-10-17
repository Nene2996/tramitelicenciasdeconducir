<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administered extends Model
{
    use HasFactory;
    protected $table = 'administrados';
    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'numero_documento',
        'numero_licencia',
        'tipo_doc_id',
        'tipo_tramite_id',
        'cat_licencia_id',
        'local_recojo_id',
        'estado_tramite_id'
    ];

    public function documentType()
    {
        return $this->belongsTo('App\Models\DocumentType', 'tipo_doc_id', 'id');
    }

    public function licenceCategory()
    {
        return $this->belongsTo('App\Models\LicenceCategory', 'cat_licencia_id', 'id');
    }

    public function placeDelivery()
    {
        return $this->belongsTo('App\Models\PlaceDelivery', 'local_recojo_id', 'id');
    }

    public function procedureType()
    {
        return $this->belongsTo('App\Models\ProcedureType', 'tipo_tramite_id', 'id');
    }

    public function processStatus()
    {
        return $this->belongsTo('App\Models\ProcessStatus', 'estado_tramite_id', 'id');
    }
}

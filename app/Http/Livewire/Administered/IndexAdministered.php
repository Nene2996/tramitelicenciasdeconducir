<?php

namespace App\Http\Livewire\Administered;

use App\Models\Administered;
use Livewire\Component;
use Livewire\WithPagination;

class IndexAdministered extends Component
{
    use WithPagination;
    public $searchColumns = [
        'apellido_paterno' => '',
        'numero_documento' => '',
        'numero_licencia' => '',
        'cat_licencia_id' => '',
        'tipo_tramite_id' => '',
        'estado_tramite_id' => ''
    ];

    public function render()
    {
        $administereds = Administered::select([
            'administrados.id',
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            'tipos_documento.tipo as tipo_documento_identidad',
            'numero_documento as numero_documento_identidad',
            'numero_licencia',
            'categorias_licencia.categoria as categoria_licencia',
            'tipos_tramite.tipo as tipo_tramite',
            'estados_tramite.estado as estado_tramite',
            'locales_recojo.local as local_recojo',
            'cat_licencia_id',
            'tipo_tramite_id',
            'estado_tramite_id'
            ])->leftJoin(
                'categorias_licencia',
                'administrados.cat_licencia_id',
                '=',
                'categorias_licencia.id'
            )->leftJoin(
                'tipos_documento',
                'administrados.tipo_doc_id',
                '=',
                'tipos_documento.id'
            )->leftJoin(
                'tipos_tramite',
                'administrados.tipo_tramite_id',
                '=',
                'tipos_tramite.id'
            )->leftJoin(
                'estados_tramite',
                'administrados.estado_tramite_id',
                '=',
                'estados_tramite.id'
            )->leftJoin(
                'locales_recojo',
                'administrados.local_recojo_id',
                '=',
                'locales_recojo.id'
            );
        
        foreach ($this->searchColumns as $column => $value) {
            if (!empty($value)) {
                if ($column == 'apellido_paterno') {
                    $administereds->where('administrados.' . $column, 'LIKE', '%' . $value . '%');
                } else if ($column == 'numero_documento') {
                    $administereds->where('administrados.' . $column, 'LIKE', '%' . $value . '%');
                } else if ($column == 'numero_licencia') {
                    $administereds->where('administrados.' . $column, 'LIKE', '%' . $value . '%');
                } else if ($column == 'cat_licencia_id') {
                    $administereds->where($column, $value);
                }else if ($column == 'tipo_tramite_id') {
                    $administereds->where($column, $value);
                }else if ($column == 'estado_tramite_id') {
                    $administereds->where($column, $value);
                }
            }
        }
            
        return view('livewire.administered.index-administered', ['administereds' => $administereds->paginate(8)]);
    }

    public function updating($value, $name)
    {
        $this->resetPage();
    }
}

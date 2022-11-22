<?php

namespace App\Http\Livewire\Administered;

use App\Models\Administered;
use App\Models\DocumentType;
use App\Models\LicenceCategory;
use App\Models\ProcedureType;
use App\Models\ProcessStatus;
use Livewire\Component;

class CreateAdministered extends Component
{

    public $processStatus;
    public $processStatusId;
    public $procedureTypes;
    public $procedureTypeId;
    public $licenceCategories;
    public $licenceCategoryId;
    public $documentTypes;
    public $documentTypeId;

    public $nombres;
    public $apellido_paterno;
    public $apellido_materno;
    public $numero_documento;
    public $numero_licencia;

    protected function rules(): array
    {
        return [
            'nombres' => [
                'required'
            ],
            'apellido_paterno' => [
                'required'
            ],
            'apellido_materno' => [
                'required'
            ],
            'numero_documento' => [
                'required',
                'regex:/^[0-9]{8}$/',
                'unique:administrados'
            ],
            'numero_licencia' => [
                'required',
                'regex:/^[A-Z]{1}[0-9]{8}$/',
                'unique:administrados'
            ],
            'licenceCategoryId' => [
                'required',
                'numeric'
            ],
            'documentTypeId' => [
                'required',
                'numeric'
            ],
            'procedureTypeId' => [
                'required',
                'numeric'
            ],
            'processStatusId' => [
                'required',
                'numeric'
            ]
        ];
    }

    protected function messages(): array
    {
        return [
            'licenceCategoryId.required' => 'Selecciona la categoria.',
            'documentTypeId.required' => 'Selecciona el tipo de doc.',
            'procedureTypeId.required' => 'Selecciona el tipo de tramite.',
            'processStatusId.required' => 'Selecciona el estado de tramite.',
        ];
    }

    public function mount()
    {
        $this->processStatus = ProcessStatus::all();
        $this->procedureTypes = ProcedureType::all();
        $this->licenceCategories = LicenceCategory::all();
        $this->documentTypes = DocumentType::all();
    }

    public function render()
    {
        return view('livewire.administered.create-administered');
    }

    public function save()
    {
        $this->validate();
        $created = Administered::create([
            'nombres' => $this->nombres,
            'apellido_paterno' => $this->apellido_paterno,
            'apellido_materno' => $this->apellido_materno,
            'numero_documento' => $this->numero_documento,
            'numero_licencia' => $this->numero_licencia,
            'tipo_doc_id' => $this->documentTypeId,
            'tipo_tramite_id' => $this->procedureTypeId,
            'cat_licencia_id' => $this->licenceCategoryId,
            'local_recojo_id' => 1,
            'estado_tramite_id' => $this->processStatusId
        ]);
        $created;
            return redirect()->route('dashboard')->with('message', 'Se ha realizado correctamente el proceso de registro del administrado ('.$this->apellido_paterno.' '.$this->apellido_materno.' '.$this->nombres.').');
        
        $this->resetValidation();
        $this->reset(['nombres', 'apellido_paterno', 'apellido_materno', 'numero_documento', 'numero_licencia', 'tipo_doc_id', 'tipo_tramite_id', 'cat_licencia_id', 'local_recojo_id', 'estado_tramite_id']);
    }

}

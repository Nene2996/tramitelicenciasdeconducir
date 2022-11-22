<?php

namespace App\Http\Livewire\Administered;

use App\Models\Administered;
use App\Models\ProcessStatus;
use Livewire\Component;

class ChangeStatusLicence extends Component
{
    public $administered;
    public $processStatus;
    public $statusId;

    public function mount(Administered $administered)
    {
        $this->administered = $administered;
        $this->statusId = $this->administered->processStatus->id;
        $this->processStatus = ProcessStatus::all();
    }

    public function render()
    {
        return view('livewire.administered.change-status-licence');
    }

    public function save()
    {
        $updated = $this->administered->update([
            'estado_tramite_id' => $this->statusId
        ]);

        if ($updated) {
            return redirect()->route('dashboard')->with('message', 'Se ha realizado correctamente el proceso de actualizacion de estado de trámite del administrado ('.$this->administered->apellido_paterno.' '.$this->administered->apellido_materno.' '.$this->administered->nombres.').');
        } 
    }
}

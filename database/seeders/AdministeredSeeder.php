<?php

namespace Database\Seeders;

use App\Models\Administered;
use Illuminate\Database\Seeder;

class AdministeredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administered::create([
            'nombres' => 'HUMBERTO',
            'apellido_paterno' => 'VILCA',
            'apellido_materno' => 'HUAMAN',
            'numero_documento' => '33432672',
            'numero_licencia' => 'W33432672',
            'tipo_doc_id' => 1,
            'tipo_tramite_id' => 2,
            'cat_licencia_id' => 6,
            'local_recojo_id' => 1,
            'estado_tramite_id' => 1,
        ]);
        Administered::create([
            'nombres' => 'HEYNER LUIS',
            'apellido_paterno' => 'CAMPOS',
            'apellido_materno' => 'CALDERON',
            'numero_documento' => '47249943',
            'numero_licencia' => 'W47249943',
            'tipo_doc_id' => 1,
            'tipo_tramite_id' => 2,
            'cat_licencia_id' => 3,
            'local_recojo_id' => 1,
            'estado_tramite_id' => 1,
        ]);
        Administered::create([
            'nombres' => 'NEISEN ALBITER',
            'apellido_paterno' => 'GUADALUPE',
            'apellido_materno' => 'LOBATO',
            'numero_documento' => '33812943',
            'numero_licencia' => 'W33812943',
            'tipo_doc_id' => 1,
            'tipo_tramite_id' => 2,
            'cat_licencia_id' => 6,
            'local_recojo_id' => 1,
            'estado_tramite_id' => 1,
        ]);
    }
}

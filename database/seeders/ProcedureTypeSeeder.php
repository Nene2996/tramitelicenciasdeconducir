<?php

namespace Database\Seeders;

use App\Models\ProcedureType;
use Illuminate\Database\Seeder;

class ProcedureTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProcedureType::create([
            'tipo' => 'Nuevo'
        ]);
        ProcedureType::create([
            'tipo' => 'Revalidación'
        ]);
        ProcedureType::create([
            'tipo' => 'Recategorización'
        ]);
        ProcedureType::create([
            'tipo' => 'Duplicado'
        ]);
    }
}

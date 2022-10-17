<?php

namespace Database\Seeders;

use App\Models\ProcessStatus;
use Illuminate\Database\Seeder;

class ProcessStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProcessStatus::create([
            'estado' => 'En Tramite'
        ]);
        ProcessStatus::create([
            'estado' => 'Listo para Recoger'
        ]);
    }
}

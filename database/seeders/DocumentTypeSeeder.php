<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentType::create([
            'tipo' => 'DOCUMENTO NACIONAL DE IDENTIDAD'
        ]);
        DocumentType::create([
            'tipo' => 'CARNÉ DE EXTRANJERIA'
        ]);
    }
}

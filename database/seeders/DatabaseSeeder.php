<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DocumentTypeSeeder::class);
        $this->call(LicenceCategorySeeder::class);
        $this->call(PlaceDeliverySeeder::class);
        $this->call(ProcedureTypeSeeder::class);
        $this->call(ProcessStatusSeeder::class);
        $this->call(AdministeredSeeder::class);
    }
}

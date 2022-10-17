<?php

namespace Database\Seeders;

use App\Models\LicenceCategory;
use Illuminate\Database\Seeder;

class LicenceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LicenceCategory::create([
            'categoria' => 'A I'
        ]);
        LicenceCategory::create([
            'categoria' => 'A IIa'
        ]);
        LicenceCategory::create([
            'categoria' => 'A IIb'
        ]);
        LicenceCategory::create([
            'categoria' => 'A IIIa'
        ]);
        LicenceCategory::create([
            'categoria' => 'A IIIb'
        ]);
        LicenceCategory::create([
            'categoria' => 'A IIIc'
        ]);
    }
}

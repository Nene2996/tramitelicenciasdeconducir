<?php

namespace Database\Seeders;

use App\Models\PlaceDelivery;
use Illuminate\Database\Seeder;

class PlaceDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlaceDelivery::create([
            'local' => 'Direc. Reg. Transporte - Amazonas'
        ]);
        PlaceDelivery::create([
            'local' => 'Direc. Sub. Reg. Transporte - Bagua-Utcubamba-Condorcanqui'
        ]);
    }
}

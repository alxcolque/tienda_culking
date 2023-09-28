<?php

namespace Database\Seeders;
use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'title'=>'BÁSICO',
            'description'=>'basic*Para principiantes*De 10 a 100 productos por mes*Panel de control*2 colaboradores*24/7 Soporte',
            'price'=>100,
            'limit'=>1,
            'discount'=>15,
            'discount_time'=>'2023-10-25 20:00:00',
            'discount_reason'=>'Inicio de Temporarda',
        ]);
        Plan::create([
            'title'=>'AVANZADO',
            'description'=>'standard*Para avanzados*De hasta 500 productos por mes*Panel de control*5 colaboradores*24/7 Soporte',
            'limit'=>3,
            'price'=>300,
            'discount'=>15,
            'discount_time'=>'2023-10-25 20:00:00',
            'discount_reason'=>'Inicio de Temporarda',
        ]);
        Plan::create([
            'title'=>'ULTRA',
            'description'=>'premium*Para tiendas grandes*Mayor a 500 productos al mes*Panel de control*Colaboradores Ilimitados *24/7 Soporte',
            'limit'=>7,
            'price'=>500,
            'discount'=>15,
            'discount_time'=>'2023-10-25 20:00:00',
            'discount_reason'=>'Inicio de Temporarda',
        ]);
    }
}

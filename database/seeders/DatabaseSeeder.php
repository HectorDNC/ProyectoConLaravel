<?php

namespace Database\Seeders;

use App\Models\Servicio;
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
        // \App\Models\User::factory(10)->create();
        // Servicio
        $servicio = new Servicio();
        $servicio->nombre = "Diagnostico";
        $servicio->descripcion = "Diagnostico General";
        $servicio->precio = 1;
        $servicio->save();

        $servicio2 = new Servicio();
        $servicio2->nombre = "Formateo de PC";
        $servicio2->descripcion = "";
        $servicio2->precio = 2;
        $servicio2->save();

        $servicio3 = new Servicio();
        $servicio3->nombre = "Mantenimiento de Camaras";
        $servicio3->descripcion = "Limpieza, revisión y reparación de camaras";
        $servicio3->precio = 5;
        $servicio3->save();
    }
}

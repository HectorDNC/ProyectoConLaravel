<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

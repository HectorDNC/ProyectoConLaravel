<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Servicio;
use App\Models\Usuario;
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
        $this->call(UsuarioSeeder::class);               
        $this->call(ProductoSeeder::class);
        $this->call(ServicioSeeder::class); 
        Usuario::factory(10)->create();
        Producto::factory(50)->create();
        Servicio::factory(20)->create();
        
    }
}

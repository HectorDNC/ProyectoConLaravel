<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuario
        $usuario = new Usuario();
        $usuario->documento = "V-1234567";
        $usuario->nombre = "Super";
        $usuario->apellido = "Administrador";
        $usuario->direccion = "Centro";
        $usuario->telefono = "04260001112";
        $usuario->email = "superadministrador@gmail.com";
        $usuario->usuario = "SuperAdmin";
        $usuario->password = "holahola";
        $usuario->save();

        $usuario2 = new Usuario();
        $usuario2->documento = "V-1234500";
        $usuario2->nombre = "Admin";
        $usuario2->apellido = "Administrador";
        $usuario2->direccion = "Centro";
        $usuario2->telefono = "04260001112";
        $usuario2->email = "administrador@gmail.com";
        $usuario2->usuario = "Administrador";
        $usuario2->password = "holahola";
        $usuario2->save();
    }
}

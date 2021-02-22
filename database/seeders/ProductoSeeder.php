<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Producto
        $producto = new Producto();
        $producto->codigo = 'P1122200';
        $producto->nombre = 'Tarjeta Ram 1GB';
        $producto->descripcion = 'Tarjeta de memoria Ram de 1GB';
        $producto->precio_porcentaje = 10;
        $producto->stock_min = 1;
        $producto->stock_max = 100;
        $producto->save();

        $producto2 = new Producto();
        $producto2->codigo = 'P1122201';
        $producto2->nombre = 'Router 3400';
        $producto2->descripcion = 'Router Tp-Link 3400';
        $producto2->precio_porcentaje = 20;
        $producto2->stock_min = 1;
        $producto2->stock_max = 100;
        $producto2->save();
    }
}

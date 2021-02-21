<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',50)->unique();
            $table->string('nombre',50);
            $table->string('descripcion',50);
            $table->double('precio_costo');
            $table->double('precio_venta');
            $table->double('precio_porcentaje');
            $table->integer('stock_min');
            $table->integer('stock_max');
            
            $table->string('estatus',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

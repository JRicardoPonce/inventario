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
            
            $table->string('nombreProducto', 30);
            $table->string('descripcion', 100);
            $table->integer('categoria');
            $table->integer('sucursal');
            $table->float('precio', 5, 0);
            $table->date('fechaCompra');
            $table->integer('estado');
            $table->string('comentarios', 100);
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

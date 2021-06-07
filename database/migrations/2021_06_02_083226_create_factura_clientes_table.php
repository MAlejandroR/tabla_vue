<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("cliente_id")
                ->references("id")
                ->on("clientes")
                ->cascadeOnDelete();
            $table->foreignId("factura_id")
                ->references("id")
                ->on("facturas")
                ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_clientes');
    }
}

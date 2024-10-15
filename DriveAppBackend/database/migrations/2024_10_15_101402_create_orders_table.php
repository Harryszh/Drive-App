<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primärschlüssel
            $table->string('abholort'); // Abholort
            $table->string('zielort'); // Zielort
            $table->string('fahrzeugtyp'); // Fahrzeugtyp
            $table->time('ladezeit'); // Ladezeit
            $table->enum('zustelloption', ['express', 'termin']); // Zustelloption
            $table->date('termin_datum')->nullable(); // Termin-Datum (nullable für die Express-Option)
            $table->timestamps(); // Erstellt 'created_at' und 'updated_at' Spalten
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
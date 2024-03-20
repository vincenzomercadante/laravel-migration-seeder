<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->enum('company', ['Trenitalia', 'Italo']);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->dateTime('departure_hours');
            $table->dateTime('arrival_hours');
            $table->string('train_code', 15)->unique();
            $table->unsignedTinyInteger('n_carriages')->default(5);
            $table->boolean('is_late')->default(true);
            $table->boolean('is_canceled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};

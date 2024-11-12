<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacementsTable extends Migration
{
    public function up()
    {
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('intern_name');
            $table->string('responsible_name');
            $table->string('mentor_name'); // Mengubah dari enum menjadi string
            $table->string('division');
            $table->enum('status', ['Sedang Berlangsung', 'Sudah Berakhir']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('placements');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('version_id')
                ->constrained('versions')
                ->onDelete('cascade');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');
            $table->string('plate', 15);
            $table->string('color', 20);
            $table->smallInteger('seats', $unsigned = false);
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
        Schema::dropIfExists('vehicules');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('locality', 100);
            $table->date('date_from');
            $table->date('date_to');
            $table->integer('guests');
            $table->integer('rooms');
            $table->text('amenities');
            $table->float('rating', 2, 1)->nullable();
            $table->text('description');
            $table->float('price', 7, 2);
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
        Schema::dropIfExists('packages');
    }
}

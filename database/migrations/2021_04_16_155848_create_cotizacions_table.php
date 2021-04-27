<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('firtsName', 50);
            $table->string('cantProduct'); 
            $table->string('company', 100)->nullable();
            // $table->boolean('notCompany')->nullable();
            $table->string('phone', 20);
            $table->string('city');
            $table->string('postalCode');
            $table->string('comments');
            $table->double('total');
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
        Schema::dropIfExists('cotizacions');
    }
}
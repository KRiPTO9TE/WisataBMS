<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKulinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuliners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->string('image');
            $table->string('bukday');
            $table->string('bukend');
            $table->string('ttpday');
            $table->string('ttpend');
            $table->string('category');
            $table->string('mapslat');
            $table->string('mapslong');
            $table->string('alamat');
            $table->string('fasi');
            $table->string('web');
            $table->string('telefon');
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
        Schema::dropIfExists('kuliners');
    }
}

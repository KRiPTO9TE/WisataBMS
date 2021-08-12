<?php

  

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

  

class CreateWisatasTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('wisatas', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->string('image');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('btdays');
            $table->string('btend');
            $table->string('category');
            $table->string('mapslat');
            $table->string('alamat');
            $table->string('tika');
            $table->string('tikd');
            $table->string('tikaw');
            $table->string('tikdw');
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

        Schema::dropIfExists('wisatas');

    }

}
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
            $table->string('bukday');
            $table->string('bukend');
            $table->string('ttpday');
            $table->string('ttpend');
            $table->string('category');
            $table->string('mapslat');
            $table->string('mapslong');
            $table->string('alamat');
            $table->string('tktaday');
            $table->string('tktaend');
            $table->string('tktdday');
            $table->string('tktdend');
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

        Schema::dropIfExists('wisatas');

    }

}
<?php

  

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

  

class CreateWisataTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('wisata', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->string('image');
            $table->string('category');
            $table->string('maps, 1999');
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

        Schema::dropIfExists('wisata');

    }

}
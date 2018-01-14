<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('release_id')->unsigned();
            $table->string('type');
            $table->string('link');
            $table->string('checksum');
            $table->string('size');
            $table->integer('count')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('release_id')->references('id')->on('release');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('downloads');
    }
}

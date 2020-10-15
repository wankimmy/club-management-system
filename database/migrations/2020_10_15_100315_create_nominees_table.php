<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominees', function (Blueprint $table) {
            $table->id();
            $table->string('committee_id1')->nullable();
            $table->string('committee_id2')->nullable();
            $table->string('committee_id3')->nullable();
            $table->string('committee_id4')->nullable();
            $table->string('committee_id5')->nullable();
            $table->string('committee_id6')->nullable();
            $table->string('committee_id7')->nullable();
            $table->string('committee_id8')->nullable();
            $table->string('committee_id9')->nullable();
            $table->string('committee_id10')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('nominees');
    }
}

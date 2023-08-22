<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->integer('zone_id');
            $table->integer('club_id');
            $table->string('name', 255);
            $table->integer('rcount')->nullable();
            $table->integer('fcount')->nullable();
            $table->integer('president')->nullable();
            $table->integer('secretary')->nullable();
            $table->integer('treasurer')->nullable();
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('clubs');
    }
}

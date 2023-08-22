<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionNoduesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_nodues', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->enum('type', ['delegate', 'alternate', 'past']);
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('valid')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('election_nodues');
    }
}

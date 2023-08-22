<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('part', 10)->nullable();
            $table->string('rule_id')->nullable();
            $table->string('rule', 500)->nullable();
            $table->string('point', 50)->nullable();
            $table->integer('monthly')->nullable();
            $table->integer('yearly')->nullable();
            $table->integer('no_of_claims')->nullable();
            $table->string('total_points', 50)->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}

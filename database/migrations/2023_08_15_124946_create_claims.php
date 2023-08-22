<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaims extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->integer('rule_id');
            $table->integer('club_id');
            $table->integer('member_id');
            $table->integer('year_id');
            $table->integer('month_id');
            $table->string('data');
            $table->integer('fa')->nullable();
            $table->integer('sa')->nullable();
            $table->integer('claimed_point')->nullable();
            $table->integer('fa_point')->nullable();
            $table->integer('sa_point')->nullable();
            $table->date('claimed_date')->nullable();
            $table->date('fa_time')->nullable();
            $table->date('sa_time')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->integer('approve_status')->default(0)->nullable();
            $table->integer('sns')->nullable();
            $table->integer('publish')->nullable();
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
        Schema::dropIfExists('claims');
    }
}

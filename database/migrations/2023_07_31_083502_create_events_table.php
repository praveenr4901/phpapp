<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('rule')->nullable();
            $table->date('opendate')->nullable();
            $table->date('closedate')->nullable();
            $table->string('title')->nullable();
            $table->date('adate')->nullable();
            $table->integer('cmars')->default(0)->nullable();
            $table->integer('ncmars')->default(0)->nullable();
            $table->integer('amcharge')->default(0)->nullable();
            $table->integer('agcharge')->default(0)->nullable();
            $table->integer('smcharge')->default(0)->nullable();
            $table->integer('sgcharge')->default(0)->nullable();
            $table->integer('alscharge')->default(0)->nullable();
            $table->integer('aleocharge')->default(0)->nullable();
            $table->integer('sleocharge')->default(0);
            $table->integer('payment')->default(0)->nullable();
            $table->integer('qrcode')->default(1)->nullable();
            $table->integer('payaccount')->default(1)->nullable();
            $table->enum('type', ['NA', 'Cabinet', 'Common', 'Division', 'PST', 'RC', 'ZC', 'RCZC', 'MJF'])->nullable();
            $table->integer('status')->default(1)->nullable();
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
        Schema::dropIfExists('events');
    }
}

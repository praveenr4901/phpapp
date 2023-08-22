<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable(false);
            $table->bigInteger('clubid');
            $table->string('name', 200);
            $table->string('gender', 10)->default("NA")->nullable(false);
            $table->string('spouse', 300);
            $table->string('mobile', 50);
            $table->string('phone', 50);
            $table->string('whatsapp', 50);
            $table->string('dob', 100);
            $table->string('joindate', 100);
            $table->string('email', 100);
            $table->string('address', 300);
            $table->string('type', 50);
            $table->timestamp('birthday');
            $table->date('anniversary')->nullable(false);
            $table->integer('profession')->default('1')->nullable(false);
            $table->string('specialization', 100)->default("NA")->nullable(false);
            $table->string('lattitude', 100)->default(0);
            $table->string('longitude', 100)->default(0);
            $table->string('comments', 100);
            $table->string('photo', 50);
            $table->string('membership', 50);
            $table->string('membertype', 50);
            $table->string('extra1', 100);
            $table->string('extra2', 100);
            $table->integer('status')->default("1"); 
            $table->integer('app')->default("0");
            $table->integer('appprofile')->default("0");
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
        Schema::dropIfExists('members');
    }
}

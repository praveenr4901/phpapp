<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddClubIdToElectionNoduesCertificate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('election_nodues_certificate', function (Blueprint $table) {
            $table->bigInteger('credentials_serial')->unsigned()->nullable()->after('serial')->default(null);
            $table->integer('club_id')->after('member_id');
            $table->tinyInteger('print_status')->after('club_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('election_nodues_certificate', function (Blueprint $table) {
            $table->dropColumn('credentials_serial');
            $table->dropColumn('club_id');
            $table->dropColumn('print_status');
        });
    }
}

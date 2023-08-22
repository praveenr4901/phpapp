<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddTriggerToElectionNoduesCertificate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('election_nodues_certificate', function (Blueprint $table) {
            $this->createTrigger();
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
            $this->dropTrigger();
        });
    }

    // Method to create the trigger
    private function createTrigger()
    {
        DB::unprepared('
            CREATE TRIGGER set_credentials_serial
            BEFORE INSERT ON election_nodues_certificate
            FOR EACH ROW
            BEGIN
                IF NEW.credentials_serial IS NULL THEN
                    SET NEW.credentials_serial = (
                        SELECT COALESCE(MAX(credentials_serial), 0) + 1
                        FROM election_nodues_certificate
                    );
                END IF;
            END
        ');
    }

    // Method to drop the trigger
    private function dropTrigger()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS set_credentials_serial');
    }
}

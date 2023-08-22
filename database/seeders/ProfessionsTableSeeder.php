<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->truncate();
        DB::table('professions')->insert([
            [
                'name' => 'NA',
                'is_active' => '1',
            ],
            [
                'name' => 'Adv.',
                'is_active' => '1',
            ],
            [
                'name' => 'Er.',
                'is_active' => '1',
            ],
            [
                'name' => 'Dr.',
                'is_active' => '1',
            ],
            [
                'name' => 'Prof. Dr.',
                'is_active' => '1',
            ],
            [
                'name' => 'Prof. ',
                'is_active' => '1',
            ],
            [
                'name' => 'Col. ',
                'is_active' => '1',
            ],
            [
                'name' => 'Ln. ',
                'is_active' => '1',
            ],
            [
                'name' => 'Lt. Col.',
                'is_active' => '1',
            ],
            [
                'name' => 'Capt.',
                'is_active' => '1',
            ],
            [
                'name' => 'CA.',
                'is_active' => '1',
            ],
            [
                'name' => 'Ar.',
                'is_active' => '1',
            ],
            [
                'name' => 'Dr. Er.',
                'is_active' => '1',
            ],

            // Add more dummy data as needed
        ]);
    }
}

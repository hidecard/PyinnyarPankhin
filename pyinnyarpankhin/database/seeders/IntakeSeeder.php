<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Intake table
        DB::table('intake')->insert([
            ['name' => 'Fall Intake', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spring Intake', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Summer Intake', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Seed IntakeDetail table
        DB::table('intake_detail')->insert([
            [
                'event_name' => 'Fall Admission Event',
                'intake_id' => 1,
                'start_date' => '2025-09-01',
                'end_date' => '2025-09-30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'event_name' => 'Spring Admission Event',
                'intake_id' => 2,
                'start_date' => '2025-01-15',
                'end_date' => '2025-02-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'event_name' => 'Summer Admission Event',
                'intake_id' => 3,
                'start_date' => '2025-06-01',
                'end_date' => '2025-06-30',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        // Seed Tuition table (assuming degree IDs from DatabaseSeeder)
        DB::table('tuition')->insert([
            ['degree_id' => 1, 'fees' => 5000, 'created_at' => now(), 'updated_at' => now()], // BSc
            ['degree_id' => 2, 'fees' => 4500, 'created_at' => now(), 'updated_at' => now()], // BA
            ['degree_id' => 3, 'fees' => 5500, 'created_at' => now(), 'updated_at' => now()], // BEng
            ['degree_id' => 4, 'fees' => 8000, 'created_at' => now(), 'updated_at' => now()], // MBA
            ['degree_id' => 5, 'fees' => 7000, 'created_at' => now(), 'updated_at' => now()], // MSc
            ['degree_id' => 6, 'fees' => 7500, 'created_at' => now(), 'updated_at' => now()], // MEng
            ['degree_id' => 7, 'fees' => 10000, 'created_at' => now(), 'updated_at' => now()], // PhD Science
            ['degree_id' => 8, 'fees' => 9500, 'created_at' => now(), 'updated_at' => now()], // PhD Humanities
            ['degree_id' => 9, 'fees' => 12000, 'created_at' => now(), 'updated_at' => now()], // Professional Doctorates
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::factory()->count(5)->create();

        Patient::factory()->count(10)->create();

        Appointment::factory()->count(15)->create();

        Doctor::factory()->count(5)->has(Patient::factory()->count(10)->has(Appointment::factory()->count(5)))->create();
    }
}

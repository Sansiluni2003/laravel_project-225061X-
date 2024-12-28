<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        $doctors = [
            [
                'name' => 'John Smith',
                'specialization' => 'Cardiologist',
                'description' => 'Experienced cardiologist with over 15 years of practice in treating heart conditions.',
                'phone' => '(555) 123-4567',
                'email' => 'john.smith@example.com',
            ],
            [
                'name' => 'Sarah Johnson',
                'specialization' => 'Pediatrician',
                'description' => 'Dedicated pediatrician specializing in child healthcare and development.',
                'phone' => '(555) 234-5678',
                'email' => 'sarah.johnson@example.com',
            ],
            [
                'name' => 'Michael Chen',
                'specialization' => 'Orthopedic Surgeon',
                'description' => 'Skilled orthopedic surgeon specializing in sports injuries and joint replacements.',
                'phone' => '(555) 345-6789',
                'email' => 'michael.chen@example.com',
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}

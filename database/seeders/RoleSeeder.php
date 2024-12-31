<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name' => 'Administrator',
                'slug' => 'admin'
            ],
            [
                'name' => 'Doctor',
                'slug' => 'doctor'
            ],
            [
                'name' => 'Patient',
                'slug' => 'patient'
            ]
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate($role);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();
        $names = ['Manager', 'Supervisor', 'Staff', 'User'];
        foreach ($names as $name) {
            Role::factory()->create([
                'name' => $name,
            ]);
        }
    }
}

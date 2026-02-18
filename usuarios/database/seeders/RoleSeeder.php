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
        $items = [
            ['name' => 'admin', 'active' => true],
            ['name' => 'user', 'active' => true],
        ];

        // Inserción masiva utilizando el método insert
        //Role::query()->insert($items);

        // Inserción individual utilizando el método create
        foreach ($items as $item) {
            $role = Role::query();

            if ($role->where('name', $item['name'])->exists() !== true) {
                $role->create($item);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::query()->select(['id'])->get();

        $role = Role::query()->select(['id'])->get()->toArray();

        $inserts = [];
        foreach ($users as $user) {
            $inserts[] = [
                'user_id' => $user->id,
                'role_id' => $role[array_rand($role)]['id'],
            ];
        }

        RoleUser::query()->insert($inserts);
    }
}

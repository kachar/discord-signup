<?php

namespace Database\Seeders;

use DB;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = file_get_contents(base_path() . "/resources/jsons/users.json");
        $data = json_decode($users, true);

        foreach ($data['members'] as $user) {
            DB::table('users')->insert([
                'discord_id' => $user['id'],
                'discord_username' => $user['username'],
                'server_nickname' => $user['nickname'],
                'roles' => json_encode($user['roles'], true),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$FubgBQIGdgzqmieeYyMtRupNlTjKIj4iGqDMwLtMJPld9wHFK/s3W',
            'remember_token' => null,
            'created_at'     => '2019-08-08 19:31:56',
            'updated_at'     => '2019-08-08 19:31:56',
            'deleted_at'     => null,
            'approved'       => 1,
            'surname'        => '',
        ]];

        User::insert($users);
    }
}

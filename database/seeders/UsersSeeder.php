<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [
            ['user_email' => 'volunteer1@email.com', 'user_full_name' => 'Ahmad', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '1', 'status' => 'V'],
            ['user_email' => 'volunteer2@email.com', 'user_full_name' => 'Aisha', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '2', 'status' => 'V'],
            ['user_email' => 'volunteer3@email.com', 'user_full_name' => 'Dea', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '3', 'status' => 'V'],
            ['user_email' => 'volunteer4@email.com', 'user_full_name' => 'Rohimin', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '4', 'status' => 'V'],
            ['user_email' => 'volunteer5@email.com', 'user_full_name' => 'John', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '5', 'status' => 'V'],

            ['user_email' => 'organisasi1@email.com', 'user_full_name' => 'Bosschild Peduli', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '1', 'status' => 'O'],
            ['user_email' => 'organisasi2@email.com', 'user_full_name' => 'Pandu Persada', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '2', 'status' => 'O'],
            ['user_email' => 'organisasi3@email.com', 'user_full_name' => 'Bina Berdaya Bangsa', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '3', 'status' => 'O'],
            ['user_email' => 'organisasi4@email.com', 'user_full_name' => 'Pelita Pangkep', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '4', 'status' => 'O'],
            ['user_email' => 'organisasi5@email.com', 'user_full_name' => 'Berbagi Senyum', 'user_password' => '$2a$12$YVIemjwK2h5sQu0Vb4SQTOYFjcYNUngwovE/p16f6E5ye1gxjg39O', 'level' => '5', 'status' => 'O'],
        ];
        foreach ($users as $user) {
            User::insert([
                'user_email' => $user['user_email'],
                'user_full_name' => $user['user_full_name'],
                'user_password' => $user['user_password'],
                'level' => $user['level'],
                'status' => $user['status'],
            ]);
    }
    }
}

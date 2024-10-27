<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'ms operator',
                'email' => 'msop@ms.com',
                'role' => 'operator',
                'password' => bcrypt('1212'),   
            ],
            [
                'name' => 'ms keu',
                'email' => 'mskue@ms.com',
                'role' => 'keuangan',
                'password' => bcrypt('1212'),   
            ],
            [
                'name' => 'ms marketing',
                'email' => 'msrk@ms.com',
                'role' => 'marketing',
                'password' => bcrypt('1212'),   
            ]
            ];
            foreach ($userData as $key => $value) {
             User::create($value);
            }
    }
}
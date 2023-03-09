<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Usertable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'fanny',
                'email' => 'fanny@gmail.com',
                'address' => 'bandung',
                'occupation' => 'student',
                'password' => '123',
            ],
            [
                'name' => 'irawan',
                'email' => 'irawa@gmail.com',
                'address' => 'bandung barat',
                'occupation' => 'student',
                'password' => '345',
            ],
        ];

        foreach ($users as $key => $user ) {
            User::create($user);
    }
}
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeed extends Seeder
{
    protected $users = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->users = [
            [
                'name' => 'Administrator',
                'email' => 'go.suits.3@gmail.com',
                'password' => Hash::make('21011995')
            ],
        ];

        DB::table('users')->insert($this->users);

    }
}

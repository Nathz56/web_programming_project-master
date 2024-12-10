<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Zara',
                'email' => 'zara@gmail.com',
                'password' => Hash::make('zara123'),
                'role' => 'Premium',
                'saldo_total' => '14735000',
                'tabungan_total' => '1750000000'
            ],
            [
                'nama' => 'Ari',
                'email' => 'ari123@gmail.com',
                'password' => Hash::make('ari332211'),
                'role' => 'Regular',
                'saldo_total' => '4850000',
                'tabungan_total' => '30000000'
            ]
        ];

        DB::table('user')->insert($users);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'uuid'            => (string) Str::uuid(),
            'identity_number' => '1323733625',
            'full_name'       => 'lindo maisal',
            'gender'          => 'l',
            'phone_number'    => '085847863339',
            'email'           => 'mrgeger19@gmail.com',
            'password'        => Hash::make('password'),
            'is_admin'        => 0,
            'is_deleted'      => 0

        ]);
    }
}
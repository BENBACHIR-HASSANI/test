<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\Env_source::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::factory()->create([
            'id' => '1',
            'first_name' => 'Jean',
            'last_name' => 'Marc',
            'trigramme_user' => 'JMC',
            'email' => 'jean.marc@dxc.com',
            'stat_id' => 'GBERGKEG',
            'tel' => '00 33 7 67 65 67 97',
            'role' => 'Administrator'
            // 'password' => Hash::make('john.12345'),
        ]);
       
        $this->call([
            Env_sourceTableSeeder::class,
            TypeTableSeeder::class,
            VersionTableSeeder::class,
        ]);
    }
}

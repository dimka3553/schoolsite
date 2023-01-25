<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tenant;
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
        Tenant::create([
            'name' => 'schAAl',
            'code' => 'school_a',
            'subdomain' => 'aa',
            ]);

        Tenant::create([
            'name' => 'schooBB',
            'code' => 'school_b',
            'subdomain' => 'bb',
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

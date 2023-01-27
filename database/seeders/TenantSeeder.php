<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    public function run()
    {
        $aa = Tenant::firstOrCreate([
            'name' => 'schAAl',
            'code' => 'school_a',
            'subdomain' => 'aa',
        ]);

        $bb = Tenant::firstOrCreate([
            'name' => 'schooBB',
            'code' => 'school_b',
            'subdomain' => 'bb',
        ]);
    }
}

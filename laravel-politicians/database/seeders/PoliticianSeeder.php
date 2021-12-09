<?php

namespace Database\Seeders;

use App\Models\Politician;
use Illuminate\Database\Seeder;

class PoliticianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Politician::factory()->count(40)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topicality;
// use Database\Factories\Faker;

class TopicalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topicality::factory()->count(30)->create();
    }
}

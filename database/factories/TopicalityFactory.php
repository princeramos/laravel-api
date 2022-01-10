<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Database\Factories\Faker;
use Faker\Generator as Faker;
use App\Models\Topicality;
use Illuminate\Support\Str;

class TopicalityFactory extends Factory
{
    protected $model = Topicality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->paragraphs(3, true)
        ];
    }
}

// $factory->define(Topicality::class, function(Faker $faker){
//     return [
//         'title' => $faker->sentence(6, true),
//         'content' => $faker->paragraphs(3, true)
//     ];
// });

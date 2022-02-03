<?php

namespace Database\Factories;

use App\Models\Article;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
           'article_id'=>Article::factory(),
            'name'=>$this->faker->name,
        ];
    }
}

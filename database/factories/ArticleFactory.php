<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'titel'=> $this->faker->text(30),
            'body'=> $this->faker->paragraph(round(5,10)),
            'like'=>round(1,10),

        ];
    }


}

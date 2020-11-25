<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'body' => $this->faker->paragraph(random_int(3, 5)),
            'commentable_id' => $this->faker->randomDigit,
            'commentable_type' => function(){
            $input = ['App\Models\Article', 'App\Models\Profile'];
            $model = $input[mt_rand(0, count($input) - 1)];
            return $model;
            }
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 14, // usersテーブルにidカラムの値が1のユーザーが存在することが前提
             'title' => fake()->realText(20, 5),
             'content' => fake()->realText(200, 5)
        ];
    }
};
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
       $categoryId = DB::table('categories')->inRandomOrder()->first();
        return [
            'category_id' => $categoryId->id,
            'title' => fake()->name(),
            'description' => fake()->text(),
            'price' => "25.55",
            'status' => 1
        ];
    }
}

<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;

class CategoriesFactory extends Factory
{
    protected $model = Categories::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->words(6, true),
        ];
    }
}

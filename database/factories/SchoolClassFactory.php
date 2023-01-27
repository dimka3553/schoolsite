<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchoolClass>
 */
class SchoolClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $age_group = ['10-14', '15-17', '18-20'];
        return [
            'tenant_id' => random_int(1, 2),
            'schoolyear'=> fake()->numberBetween(2023, 2029),
            'age_group' => $age_group[random_int(0,2)],
            'title' => fake()->title(),
            'teacher' => fake()->numberBetween(1, User::count()),
            'description' => fake()->text(100),
            //
        ];
    }
}

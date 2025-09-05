<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class siswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->dateTimeBetween('-20 years,','-18 years')->format('Y-m-d'),
            'nilai' => fake()->numberBetween(0,100),
            'npm' => fake()->randomNumber(4,true)
        ];
    }
}

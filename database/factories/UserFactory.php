<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $photo = [
            'Sample1.png',
            'Sample2.png',
            'Sample3.png',
            'Sample4.png',
            'Sample5.png',
            'Sample6.png',
            'Sample7.png',
            'Sample8.png',
            'Sample9.png',
        ];

        return [
            'role_id' => '1',
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => '123',
            'photo' => fake()->randomElement($photo),
            'email_verified_at' => now(),
            'password' => Hash::make('abc'), // password
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

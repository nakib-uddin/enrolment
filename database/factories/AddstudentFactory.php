<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addstudent>
 */
class AddstudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->unique()->randomNumber(),
            'student_name' => $this->faker->name(),
            'student_email' => $this->faker->unique()->safeEmail(),
            'student_roll' => $this->faker->randomNumber(),
            'student_fathername' => $this->faker->name(),
            'student_mothername' => $this->faker->name(),
            'student_phone' => $this->faker->phoneNumber(),
            'student_department' => $this->faker->word(),
            'student_address' => $this->faker->address(),
            'student_year' => $this->faker->year(),
            'student_password' => Hash::make('password'),
            'student_image' => $this->faker->image('public/storage/student_images', 200, 150, 'people', false),
        ];
    }
}

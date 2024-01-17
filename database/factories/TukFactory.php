<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tuk>
 */
class TukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();
        $competences = DB::table('competence')->select('id')->get();

        return [
            'user_id' => $users->random()->id,
            'competence_id' => $competences->random()->id,
            'full_name' => $this->faker->name,
            'organization_name' => $this->faker->company,
            'city' => $this->faker->city,
            'birth_date' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'nationality' => $this->faker->country,
            'address' => $this->faker->address,
            'contact_phone_number' => $this->faker->phoneNumber,
            'contact_email' => $this->faker->email,
            'education_title' => $this->faker->jobTitle,
            'education_school_university' => $this->faker->company,
            'education_major' => $this->faker->word,
            'company_name' => $this->faker->company,
            'company_address' => $this->faker->address,
            'company_position' => $this->faker->jobTitle,
            'company_email' => $this->faker->email,
            'photo' => $this->faker->imageUrl(),
            'identification_card' => $this->faker->imageUrl(),
            'education_certificate' => $this->faker->imageUrl(),
            'curriculum_vitae' => $this->faker->imageUrl(),
            'additional_link' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

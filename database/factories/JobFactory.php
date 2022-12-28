<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween(160, 200),
            'slug' => $this->faker->realTextBetween(160, 200),
            'entreprise_name' => $this->faker->domainName(),
            'description' => $this->faker->text(),
            'description' => $this->faker->text(),
            'email' => $this->faker->email(),
            'telephone' => $this->faker->phoneNumber(),
            'limit_date' => $this->faker->date(),
            'code' => rand(100, 200),
            'category_id'  => rand(1 , 20),
            'type_job_id'  => rand(1 , 2),
            'region_id'  => rand(1 ,5),
            'created_at'  => now()
        ];
    }
}

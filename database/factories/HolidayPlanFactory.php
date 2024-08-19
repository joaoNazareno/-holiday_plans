<?php

namespace Database\Factories;

use App\Models\HolidayPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

class HolidayPlanFactory extends Factory
{
    protected $model = HolidayPlan::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'date' => $this->faker->date(),
            'location' => $this->faker->city,
            'participants' => $this->faker->sentence,
        ];
    }
}


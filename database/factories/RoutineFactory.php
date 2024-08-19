<?php

namespace Database\Factories;

use App\Models\Routine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoutineFactory extends Factory
{
    protected $model = Routine::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'title' => $this->faker->name,
			'description' => $this->faker->name,
			'frequency' => $this->faker->name,
			'days' => $this->faker->name,
			'weeks' => $this->faker->name,
			'months' => $this->faker->name,
			'start_time' => $this->faker->name,
			'end_time' => $this->faker->name,
        ];
    }
}

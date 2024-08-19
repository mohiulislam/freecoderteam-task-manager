<?php

namespace Database\Factories;

use App\Models\Reminder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReminderFactory extends Factory
{
    protected $model = Reminder::class;

    public function definition()
    {
        return [
			'title' => $this->faker->name,
			'description' => $this->faker->name,
			'date' => $this->faker->name,
			'time' => $this->faker->name,
			'user_id' => $this->faker->name,
        ];
    }
}

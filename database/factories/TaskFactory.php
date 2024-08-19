<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'project_id' => $this->faker->name,
			'title' => $this->faker->name,
			'description' => $this->faker->name,
			'due_date' => $this->faker->name,
			'priority' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}

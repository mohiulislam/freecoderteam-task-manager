<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'name' => $this->faker->name,
			'description' => $this->faker->name,
			'start_date' => $this->faker->name,
			'end_date' => $this->faker->name,
			'status' => $this->faker->name,
			'budget' => $this->faker->name,
        ];
    }
}

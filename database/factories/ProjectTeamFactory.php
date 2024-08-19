<?php

namespace Database\Factories;

use App\Models\ProjectTeam;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectTeamFactory extends Factory
{
    protected $model = ProjectTeam::class;

    public function definition()
    {
        return [
			'project_id' => $this->faker->name,
			'user_id' => $this->faker->name,
			'role' => $this->faker->name,
        ];
    }
}

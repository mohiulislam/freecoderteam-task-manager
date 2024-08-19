<?php

namespace Database\Factories;

use App\Models\ChecklistItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChecklistItemFactory extends Factory
{
    protected $model = ChecklistItem::class;

    public function definition()
    {
        return [
			'task_id' => $this->faker->name,
			'name' => $this->faker->name,
			'completed' => $this->faker->name,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'title' => $this->faker->name,
			'content' => $this->faker->name,
			'date' => $this->faker->name,
			'time' => $this->faker->name,
        ];
    }
}

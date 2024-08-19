<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FileFactory extends Factory
{
    protected $model = File::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'name' => $this->faker->name,
			'path' => $this->faker->name,
			'type' => $this->faker->name,
        ];
    }
}

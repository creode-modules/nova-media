<?php

namespace Modules\NovaMedia\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\NovaMedia\app\Models\Media::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'location' => $this->faker->image(),
            'alt_text' => $this->faker->sentence(),
        ];
    }
}


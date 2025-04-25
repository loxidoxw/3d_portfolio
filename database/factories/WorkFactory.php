<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Test title' . ' ' . $this->faker->unique()->randomNumber(),
            'description' => 'Test description, lorem ipsum dolor sit amet',
            'thumbnail' => 'models/thumbnail/test_thumbnail.png',
            'sketchfab_url' => 'https://sketchfab.com/models/273c413f7a5340498974b5b86b799f49/embed',
            'mview_path' => 'models/model_files/Z0uAWuQGEvt3RlFmfWvPlHEaCyEwZh7HZksyl0rQ.jpg'
        ];
    }
}

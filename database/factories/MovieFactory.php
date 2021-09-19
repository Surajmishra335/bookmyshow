<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->words($nb=2, $asText = true);
        $slug = Str::slug($name);
        $samenumber = '2';
        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->text(400),
            'language_id' => '2',
            'genre_id' => '10',
            'format_id' => '2',
            'release_date' => $this->faker->dateTimeThisMonth(),
            'duration' => '155',
            'trailer_link' => 'https://www.youtube.com/watch?v=6L6XqWoS8tw&ab_channel=FoxStarHindi',
            'banner_image' => 'assets/images/content/up3.jpg',
            'state_id' => $samenumber,
            'city_id'=> $samenumber,
            'location' => $this->faker->word(),
            'price' => '500',
            'user_id' => '1',
        ];
    }
}

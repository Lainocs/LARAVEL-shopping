<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'            => $this->faker->sentence(1),
            'image'            => $this->faker->imageUrl(200, 200),
            'description'      => $this->faker->text(),
            'price'            => $this->faker->numberBetween(1,500),
            'quantity'            => $this->faker->numberBetween(1,99),
            'publication_date' => new \DateTime,
            'published'        => true,
            'user_id'          => DB::table('users')->get('id')->random(1)->first()->id,
            'category_id'      => DB::table('categories')->get('id')->random(1)->first()->id,
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\Autor;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Autor::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            //

            'Nombre' => $this->faker-> name(),
            'Autobiografia' => $this->faker->text($nbSentences = 5, $variableNbSentences = true),
            'Foto' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}






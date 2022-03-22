<?php

namespace Database\Factories;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Libro::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Nombre Del Libro' => $this->faker->streetName,
            'Id Autor' => $this->faker->randomNumber($nbDigits=NULL, $strict=false),
            'Precio De Venta' => $this->faker->numberBetween(100, 1000),
            'Tipo De Libro' => $this->faker->randomElement($array= array ('Terror','Educativo',' infantiles')),
        ];
        
    }
}
           
    

            
             

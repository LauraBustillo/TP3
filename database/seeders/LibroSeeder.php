<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;
class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Libro::Factory(500)->create();
    }
}

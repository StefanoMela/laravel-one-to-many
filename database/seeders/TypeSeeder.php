<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $_types = ['Front-end','Back-end','Full-stack'];

        foreach ($_types as $_type)
        {
            $type = new Type();
            $type->label = $_type;
            $type->color = $faker->hexColor();
            $type->save();
        }
    }
}

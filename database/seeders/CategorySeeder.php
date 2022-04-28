<?php

declare(strict_types=1);

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create();
        $categoryData = [];

        for ($i = 1; $i < 5; $i++) {
            $categoryData[] = [
                'title' => $faker->jobTitle(),
                'description' => $faker->text(500),
            ];
        }

        return $categoryData;
    }
}

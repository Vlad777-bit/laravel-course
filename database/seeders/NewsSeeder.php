<?php

declare(strict_types=1);

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('News')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create();
        $newsData = [];
        $status = ['ACTIVE', 'DRAFT', 'BLOCKED'];

        for ($i = 1; $i < 20; $i++) {
            $newsData[] = [
                'category_id' => mt_rand(1, 4),
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(1300, 325),
                'status' => $status[mt_rand(0, count($status) - 1)],
                'description' => $faker->text(500),
            ];
        }

        return $newsData;
    }
}

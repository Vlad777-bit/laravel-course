<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Comments')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create();
        $commentData = [];

        for ($i = 1; $i < 5; $i++) {
            $commentData[] = [
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(50, 50),
                'comment' => $faker->text(mt_rand(100, 500)),
            ];
        }

        return $commentData;
    }
}

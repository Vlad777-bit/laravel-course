<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(?int $id, ?string $category): array
    {
        $faker = Factory::create();
        $dataNews = [];
        $status = ['DRAFT', 'ACTIVE', 'BLOCKED'];
        $categoryList = self::getCategories();
        $result = [];

        if ($id) {
            return [
                'title' => $faker->jobTitle(),
                'img' => $faker->imageUrl(1250, 325),
                'author' => $faker->userName(),
                'body' => $faker->text(2000),
                'status' => $status[mt_rand(0, 2)],
            ];
        }

        for ($i = 1; $i < 20; $i++) {
            $dataNews[] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'img' => $faker->imageUrl(1250, 325),
                'author' => $faker->userName(),
                'description' => $faker->text(500),
                'status' => $status[mt_rand(0, 2)],
                'category' => $categoryList[mt_rand(0, 4)],
            ];
        }

        if ($category) {
            foreach ($dataNews as $news) {
                if ($news['category'] === $category) {
                    $result[] = $news;
                }
            }
        }

        return $result;
    }

    public function getComments(): array
    {
        $faker = Factory::create();
        $commentsList = [];

        for($i = 1; $i < 10; $i++)
        {
            $commentsList[] = [
                'author' => $faker->userName(),
                'img' => $faker->imageUrl(48, 48),
                'comment' => $faker->text(mt_rand(100, 300)),
            ];
        }

        return $commentsList;
    }

    public static function getCategories(): array
    {
        return ['Здоровье', 'Спорт', 'Наука', 'Красота', 'Программирование'];
    }
}

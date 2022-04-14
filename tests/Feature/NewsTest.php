<?php

namespace Tests\Feature;

use App\Models\Category;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * Проверяет сущеструет ли страница news
     *
     * @return void
     */
    public function test_the_news_returns_a_successful_response(): void
    {
        $categoriesList = $this->getCategoriesList();
        $rndCategory = implode(' ', $categoriesList[mt_rand(0, count($categoriesList) - 1)]);

        $response = $this->get("/news/" . $rndCategory);
        $response->assertStatus(200);
    }

    /**
     * Проверяет загрузились ли данные news
     *
     * @return void
     */
    public function test_the_loading_of_news(): void
    {
        $categoriesList = $this->getCategoriesList();
        $rndCategory = implode(' ', $categoriesList[mt_rand(0, count($categoriesList) - 1)]);

        $response = $this->get("/news/" . $rndCategory);
        $response->assertViewHas('newsList', $value = null);
    }

    private function getCategoriesList(): array
    {
        return Category::select('id')->get()->toArray();
    }
}

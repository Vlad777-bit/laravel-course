<?php

namespace Tests\Feature;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
        $newsList = $this->getCategoriesList();

        $response = $this->get("/news/" . $newsList[mt_rand(0, count($newsList))]);
        $response->assertStatus(200);
    }

    /**
     * Проверяет загрузились ли данные news
     *
     * @return void
     */
    public function test_the_loading_of_news(): void
    {
        $newsList = $this->getCategoriesList();

        $response = $this->get("/news/" . $newsList[mt_rand(1, count($newsList))]);
        $response->assertViewHas('newsList', $value = null);
    }

    private function getCategoriesList(): array
    {
        return Controller::getCategories();
    }
}

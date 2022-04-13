<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JetBrains\PhpStorm\NoReturn;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /**
     * Проверяет сущеструет ли страница categories
     *
     * @return void
     */
    public function test_the_categories_returns_a_successful_response(): void
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    /**
     * Проверяет, загрузились ли категории
     *
     * @return void
     */
    public function test_the_loading_of_categories(): void
    {
        $response = $this->get('/categories');

        $response->assertViewHas('categoriesList', $value = null);
    }
}

<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * Проверяет успешную загрузку списка новостей, для редактирования
     *
     * @return void
     */
    public function test_the_admin_news_returns_a_successful_response(): void
    {
        $response = $this->get('/admin/news');

        $response->assertStatus(200);
    }
}

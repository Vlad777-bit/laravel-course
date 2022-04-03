<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * Проверяет успешную загрузку списка категорий, для редактирования
     *
     * @return void
     */
    public function test_the_admin_categories_returns_a_successful_response(): void
    {
        $response = $this->get('/admin/categories');

        $response->assertStatus(200);
    }
}

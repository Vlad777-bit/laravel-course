<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * Проверяет успешную загрузку страницы панели администратора
     *
     * @return void
     */
    public function test_the_admin_index_returns_a_successful_response(): void
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }
}

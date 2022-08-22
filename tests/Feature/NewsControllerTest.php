<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_newslist_successful_page()
    {
        $response = $this->get(route('newslist.index', ['cat_id' => 2]));

        $response->assertStatus(200);
    }

    public function test_news_successful_page()
    {
        $response = $this->get(route('news.show', ['id' => 2]));

        $response->assertStatus(200);
    }

    public function test_news_page_has_params()
    {
        $response = $this->get(route('news.show', ['id' => 1]));

        $response->assertViewHasAll(['news']);
    }
}

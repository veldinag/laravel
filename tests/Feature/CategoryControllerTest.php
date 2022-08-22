<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_category_successful_page()
    {
        $response = $this->get(route('category.index'));

        $response->assertStatus(200);
    }

    public function test_category_page_has_params()
    {
        $response = $this->get(route('category.index'));

        $response->assertViewHasAll(['categoriesList']);
    }
}

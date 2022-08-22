<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnloadingOrderControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_unloadingorder_create_successful_page()
    {
        $response = $this->get(route('unloadingorder.create'));

        $response->assertStatus(200);
    }

    public function test_unloadingorder_index_successful_page()
    {
        $response = $this->get(route('unloadingorder.index'));

        $response->assertStatus(200);
    }
}

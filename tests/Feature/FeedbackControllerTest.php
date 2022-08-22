<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_feedback_create_successful_page()
    {
        $response = $this->get(route('feedback.create'));

        $response->assertStatus(200);
    }

    public function test_feedback_index_successful_page()
    {
        $response = $this->get(route('feedback.index'));

        $response->assertStatus(200);
    }
}

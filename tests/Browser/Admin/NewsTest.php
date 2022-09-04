<?php

namespace Tests\Browser\Admin;

use App\Models\News;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateForm(): void
    {
        $news = News::factory()->create();

        $this->browse(static function (Browser $browser) use($news) {
            $browser->visit('/admin/news/create')
                ->select('category_id', $news->category_id)
                ->select('source_id', $news->source_id)
                ->type('title', $news->title)
                ->type('author', $news->author)
                ->type('description', $news->description)
                ->type('text', $news->text)
                ->press('Save')
                ->assertPathIs('/admin/news');
        });
    }
}

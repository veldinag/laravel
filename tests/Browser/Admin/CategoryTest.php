<?php

namespace Tests\Browser\Admin;

use App\Models\Category;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateForm(): void
    {
        $category = Category::factory()->create();

        $this->browse(static function (Browser $browser) use($category) {
            $browser->visit('/admin/categories/create')
                    ->type('title', $category->title)
                    ->type('description', $category->description)
                    ->press('Add category')
                    ->assertPathIs('/admin/categories');
        });
    }

    public function testEditForm(): void
    {
        $category = Category::factory()->create();

        $this->browse(static function (Browser $browser) use($category) {
            $browser->visit('/admin/categories/1/edit')
                ->type('title', $category->title)
                ->type('description', $category->description)
                ->press('Save')
                ->assertPathIs('/admin/categories');
        });
    }
}

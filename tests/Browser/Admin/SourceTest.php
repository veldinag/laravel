<?php

namespace Tests\Browser\Admin;

use App\Models\Source;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SourceTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateForm(): void
    {
        $source = Source::factory()->create();

        $this->browse(static function (Browser $browser) use($source) {
            $browser->visit('/admin/sources/create')
                ->type('name', $source->name)
                ->type('link', $source->link)
                ->press('Add source')
                ->assertPathIs('/admin/sources');
        });
    }

    public function testEditForm(): void
    {
        $source = Source::factory()->create();

        $this->browse(static function (Browser $browser) use($source) {
            $browser->visit('/admin/sources/1/edit')
                ->type('name', $source->name)
                ->type('link', $source->link)
                ->press('Save')
                ->assertPathIs('/admin/sources');
        });
    }
}

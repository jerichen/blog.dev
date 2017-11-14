<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class IndexTest extends DuskTestCase
{
    /**
     * @test
     * @group index
     */
    public function index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertTitle('首頁')
                    ->assertSee('我是首頁')
                    ->assertPathIs('/');
        });
    }
}

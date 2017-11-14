<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TaskTest extends DuskTestCase
{
    /**
     * @test
     * @group task
     */
    public function create()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/task/create')
                    ->assertTitle('Blog.dev')
                    ->assertSee('Create Task')
                    ->assertPathIs('/task/create');
        });
    } 
    
    /**
     * @test
     * @group task
     */
    public function taskPostSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/task/create')
                    ->type('title', 'My Task')
                    ->press('Add Task')
                    ->pause(5000)
                    ->assertPathIs('/task/create');
        });
    }
}

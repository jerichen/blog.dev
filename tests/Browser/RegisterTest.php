<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    
    /**
     * @test
     */
    public function index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register');
        });
    }
    
    /**
     * @test
     */
    public function register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'Bobby Bouwmann')
                    ->type('email', 'register@gmail.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('Register')
                    ->assertSee('Dashboard')
                    ->assertSee('You are logged in!')
                    ->assertSee('Bobby Bouwmann');
        });
    }
}

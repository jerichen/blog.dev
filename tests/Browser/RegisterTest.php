<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
//    use DatabaseMigrations;
    
    /**
     * @test
     * @group register
     */
    public function register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertTitle('Blog.dev')
                    ->assertSee('我是註冊頁')
                    ->assertPathIs('/register');
        });
    }
    
    /**
     * @test
     * @group register
     */
    public function registerPostSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'Jeri')
                    ->type('email', 'jerichen@cw.com.tw')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('Register')
                    ->assertSee('登入成功')
                    ->assertSee('Hello')
                    ->assertSee('Jeri')
                    ->assertPathIs('/home');
        });
    }
}

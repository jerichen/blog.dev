<?php
namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
//    use DatabaseMigrations;
    
    /**
     * @test
     * @group login
     */
    public function login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertTitle('Blog.dev')
                    ->assertSee('我是登入頁')
                    ->assertPathIs('/login');
        });
    }    

    /**
     * @test
     * @group login
     */
    public function loginPostSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'jerichen@cw.com.tw')
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertSee('登入成功')
                    ->assertSee('Hello')
                    ->assertSee('Jeri')
                    ->assertPathIs('/home');
        });
    }
}

<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ArticleTest extends DuskTestCase
{
    /**
     * @test
     * @group article
     */
    public function article()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/article')
                    ->assertTitle('文章頁')
                    ->assertSee('我是文章頁')
                    ->assertPathIs('/article');
        });
    }  
    
    /**
     * @test
     * @group article
     */
    public function articleLoginPostSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/article')
                    ->press('#login')
                    ->assertPathIs('/login')
                    ->type('email', 'jerichen@cw.com.tw')
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertSee('登入成功')
                    ->assertSee('Hello')
                    ->assertSee('Jeri')
                    ->assertSee('我來自文章頁')
                    ->assertPathIs('/home');
        });
    }
}

<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
	 ->type('name', 'George Graham')
	 ->type('email', 'georgegraham@laravel.com')
	 ->type('password', 'password')
	 ->type('password_confirmation', 'password')
	 ->press('Register')
	 ->pause(5000)
	 ->assertPathIs('/home');
        });
    }
	
	public function testLogout()
	{
    $this->browse(function ($browser) {
        $browser->visit('/home')
            ->clickLink('Logout')
            ->assertPathIs('/login');
    });
	}

	public function testLogin()
	{
    $this->browse(function ($browser) {
        $browser->visit('login')
            ->type('email', 'tessa@cloudways.com')
            ->type('password', 'ahmedkhan')
            ->press('Login')
            ->assertPathIs('/todoapplaravel/public/todo');
    });
	}
	
}

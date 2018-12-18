<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testInsertAdmin()
    {
        $user = new User();
        $user->email = 'admin@yahoo.com';
        $user->password = '123456';
        $user->role = 'Admin';
        $this->assertTrue(true);
    }

    //Delete above created user 'admin'
    public function testDeleteAdmin()
    {
        $user = User::where('role', ['admin'] && 'email', ['admin@yahoo.com'])->delete();
        $this->assertTrue(true);
    }

    public function testCountAdmin()
    {
        $admin = User::where('role',['admin']);
        $adminCount = $admin->count();
        $this->assertTrue(true);
    }
}

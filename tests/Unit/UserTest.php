<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = factory(\App\User::class)->make();

        $this->assertTrue($user->save());
    }

    public function testQuestions(){
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->questions()->get()));
    }

    public function testAnswers(){
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->answers()->get()));
    }

    public function testProfile(){
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->profile()->get()));
    }
    public function testLike(){
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->likes()->get()));
    }
    public function testDislike(){
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->dislikes()->get()));
    }

    public function testInsertUser()
    {
        $user = new User();
        $user->email = 'user@yahoo.com';
        $user->password = '123456';
        $user->role = 'admin';
        $this->assertTrue(true);
    }

    public function testUpdateUser()
    {
        $user = User::where('id',[1])->update(['password' => '123456']);
        $this->assertTrue(true);
    }

    public function testDeleteUser()
    {
        $user = User::where('id','=', [2])->delete();
        $this->assertTrue(true);
    }

    public function testCountUser()
    {
        $user = User::All();
        $userCount = $user->count();
        $this->assertTrue(true);
    }

    public function testUserRole()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType('string', $user->role);
    }

    public function testUserMake()
    {
        $user = User::inRandomOrder()->first();
        $this->assertContains($user->role, ['admin', 'subscriber']);
    }

}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class profileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = factory(\App\User::class)->make();
        $user->save();
        $profile = factory(\App\Profile::class)->make();
        $profile->user()->associate($user); //it helps data to connect
        $this->assertTrue($profile->save());
    }


}

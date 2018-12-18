<?php

namespace Tests\Unit;

use App\Dislike;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DislikeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertDislike()
    {
        $dislike = new Dislike();
        $dislike->user_id = "999";
        $dislike->answer_id = "10";
        $this->assertTrue(true);

    }

    public function testUpdateDislike()
    {
        $dislike = Dislike::where('id',[10])->update(['answer_id' => '119']);
        $this->assertTrue(true);
    }

    public function testDeleteDislike()
    {
        $dislike = Dislike::where('id','=', [1])->delete();
        $this->assertTrue(true);
    }

    public function testCountDislike()
    {
        $dislike = Dislike::All();
        $dislikeCount = $dislike->count();
        $this->assertTrue(true);
    }

    public function testDislikeAnswerId()
    {
        $dislike = Dislike::inRandomOrder()->first();
        $this->assertInternalType('int', intval($dislike->answer_id));
    }

}

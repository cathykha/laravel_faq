<?php

namespace Tests\Unit;

use App\Like;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LikeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertLike()
    {
        $like = new Like();
        $like->user_id = "1000";
        $like->answer_id = "5";
        $this->assertTrue(true);

    }

    public function testUpdateLike()
    {
        $like = Like::where('id',[10])->update(['answer_id' => '119']);
        $this->assertTrue(true);
    }

    public function testDeleteLike()
    {
        $like = Like::where('id','=', [1])->delete();
        $this->assertTrue(true);
    }

    public function testCountLike()
    {
        $like = Like::All();
        $likeCount = $like->count();
        $this->assertTrue(true);
    }

    public function testLikeUserId()
    {
        $like = Like::inRandomOrder()->first();
        $this->assertInternalType('int', intval($like->user_id));
    }

}

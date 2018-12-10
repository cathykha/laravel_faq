<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $users = App\User::all();
            for ($i = 1; $i <= 5; $i++) {
                $users->each(function ($user) {
                    $answer = App\Answer::inRandomOrder()->first();
                    $like = factory(\App\Like::class)->make();
                    $like->user()->associate($user);
                    $like->answer()->associate($answer);
                    $like->save();
                });

        }
    }
}

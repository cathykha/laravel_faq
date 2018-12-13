<?php

use Illuminate\Database\Seeder;

class DislikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        for ($i = 1; $i <= 3; $i++) {
            $users->each(function ($user) {
                $answer = App\Answer::inRandomOrder()->first();
                $unlike = factory(\App\Dislike::class)->make();
                $unlike->user()->associate($user);
                $unlike->answer()->associate($answer);
                $unlike->save();
            });

        }
    }
}

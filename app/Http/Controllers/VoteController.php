<?php

namespace App\Http\Controllers;
use App\Answer;
use App\Question;
use App\Like;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class VoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view($answer_id, $question)
    {
        $answers = Answer::where('id', '=', $answer_id)->get();
        $likeAns = Answer::find($answer_id);
        $likeCount = Like::where(['answer_id' => $likeAns->id])->count();
        //$unlikeCount = Unlike::where(['answer_id' => $likeAns->id])->count();
        return view('answers.view',['answers' => $answers, 'likeCount' => $likeCount]);
    }

    public function like($id)
    {
        $user = Auth::user()->id;
        $liked = Like::where(['user_id' => $user, 'answer_id' => $id])->first();
        if (empty($liked->user_id)) {
            $user_id = Auth::user()->id;
            $answer_id = $id;

            $like = new Like;
            $like->user_id = $user_id;
            $like->answer_id = $answer_id;
            $like->save();
            return redirect()->back()->with('success', ['Liked']);
        } else {
            return redirect()->back()->with('success', ['Liked']);
        }
    }
}






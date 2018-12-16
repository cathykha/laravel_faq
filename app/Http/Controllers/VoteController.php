<?php

namespace App\Http\Controllers;
use App\Answer;
use App\Like;
use App\Dislike;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class VoteController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view($answer_id)
    {
        //Session::put('key', 'value');

        $answers = Answer::where('id', '=', $answer_id)->get();
        $ansId = Answer::find($answer_id);
        $likeCount = Like::where(['answer_id' => $ansId->id])->count();
        $dislikeCount = Dislike::where(['answer_id' => $ansId->id])->count();
        return view('answers.view',['answers' => $answers, 'likeCount' => $likeCount, 'dislikeCount' => $dislikeCount]);
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

            return redirect()->back()->with('message', 'Liked');
        } else {
            return redirect()->back()->with('message', 'Liked');
        }
    }

    public function dislike($id)
    {
        $user = Auth::user()->id;
        $disliked = Dislike::where(['user_id' => $user, 'answer_id' => $id])->first();
        if (empty($disliked->user_id)) {
            $user_id = Auth::user()->id;
            $answer_id = $id;

            $dislike = new Dislike;
            $dislike->user_id = $user_id;
            $dislike->answer_id = $answer_id;
            $dislike->save();

            return redirect()->back()->with('message', 'Disliked');
        } else {
            return redirect()->back()->with('message', 'Disliked');
        }
    }
}






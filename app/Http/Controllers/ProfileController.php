<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
    public function create(){
        $profile = new Profile();
        $edit = FALSE;
        return view ('profileForm', ['profile' => $profile, 'edit' => $edit]);
    }
    public function store(Request $request){
        $input = $request -> validate([
            'fname' => 'required',
            'lname'=> 'required',
            'body'=>'required'
        ], [
            'fname.required' => ' First is required',
            'lname.required' => ' Last is required',
            'body.required' => ' Body is required',
        ]);
         $input = request() -> all();

         $profile = new Profile($input);
         $profile-> user()->associate(Auth::user());
         $profile->save();

         return redirect()->route('home')->with('message', 'Profile Created');
    }

    public function show($id){
        $user = Auth::user();
        $profile = $user->profile;
        return view('profile')->with('profile', $profile);
    }

    public function edit($user, $profile){
        $user = User::find($user);
        $profile = $user->profile;
        $edit = TRUE;

        return view('profileForm', ['profile'=>$profile, 'edit'=> $edit ]);
    }

    public function update(Request $request, $user, $profile){
        $input = $request->validate([
            'fname'=>'required',
            'lname'=>'required',
        ], [

            'fname.required' => 'First is required',
            'lname.required' => 'Last is required',
        ]);
        $profile = Profile::find($profile);
        $profile->fname = $request->fname;
        $profile->lname = $request->lname;
        $profile->body = $request->body;
        $profile->save();

        return redirect()->route('home')->with('message', 'Updated Profile');
    }
}



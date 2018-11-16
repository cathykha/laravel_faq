<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function store(Request $request){

    }

    public function show($id){
        $user = Auth::user();
        $profile = $user->profile;
        return view('profile')->with('profile', $profile);
    }

    public function edit($id){


    }

}



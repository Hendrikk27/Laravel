<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function edit()
    {
       return view('password');
    }

    public function update(Request $request)
    {
        $request->validate
        ([
            'oldpassword'=> ['required', new MatchOldPassword],
            'newpassword'=>'required|min:8',
            'confirmpassword'=>'required|same:newpassword'
        ]);

        User::find(Auth::user()->id)->update(['password' => Hash::make($request->newpassword)]);

        return redirect('/');

    }
}

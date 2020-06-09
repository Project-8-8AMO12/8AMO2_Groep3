<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function indexLogin() {
        return view('account.login');
    }

    public function doLogin(Request $request) {
        $username = $request->get('username');
        $password = $request->get('password');

        if ($username == null) {
            return back()->with('error', 'Please enter a username');
        }

        if ($password == null) {
            return back()->with('error', 'Please enter a password');
        }

        if (User::where('username', '=', $username)->exists()) {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);

            $user_data = array(
                'username' => $request->get('username'),
                'password' => $request->get('password')
            );

            if (Auth::attempt($user_data)) {
                return redirect('/');
            }
        }
    }

    public function indexRegister() {
        return view('account.register');
    }

    public function doRegister(Request $request) {
        $username = $request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');

        if(User::where('username', '=', $username)->exists()) {
            return back()->with('error', 'Username invalid. User with that name already exists.');
        }
        if ($username == null) {
            return back()->with('error', 'Please enter a username');
        }
        if ($email == null) {
            return back()->with('error', 'Please enter an email');
        }
        if ($password == null) {
            return back()->with('error', 'Please enter a password');
        }

        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();

        $user_data = array(
            'username' => $username,
            'password' => $password
        );

        if (Auth::attempt($user_data)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Something went wrong.');
        }

    }

}

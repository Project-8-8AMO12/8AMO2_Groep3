<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function indexLogin()
    {
        return view('account.login');
    }

    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );

        if (!Auth::attempt($user_data)) {
            return back()->with('error', 'Wrong username or password');
        }

        return redirect('/');
    }

    public function indexRegister()
    {
        return view('account.register');
    }

    public function doRegister(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $username = $request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();

        $user_data = array(
            'username' => $username,
            'password' => $password
        );

        if (!Auth::attempt($user_data)) {
            return back()->with('error', 'Something went wrong');
        }

        return redirect('/');

    }

}

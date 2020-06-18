<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome() {

        return view('page.home');

    }

    public function showAgenda() {

        return "soon";

    }

    public function showContact() {
        $users = User::all();
        return view('page.contact', compact('users'));

    }

    public function doContact(Request $request) {
        $questionTo = $request->questionTo;
        $email = $request->email;
        $content = $request->qcontent;

        $questionToUsername = User::where('id', $questionTo)->pluck('username')->first();

        $contact = new Contact();
        $contact->question_to = $questionToUsername;
        $contact->user_email = $email;
        $contact->content = $content;

        $contact->save();

        return redirect('/');
    }
}

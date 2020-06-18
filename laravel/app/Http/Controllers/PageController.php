<?php

namespace App\Http\Controllers;

use App\CMSPage;
use App\Contact;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome() {

        $page_content = CMSPage::where('content_name', '=', 'home')->first();

        return view('page.home', ['page_content' => $page_content]);

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

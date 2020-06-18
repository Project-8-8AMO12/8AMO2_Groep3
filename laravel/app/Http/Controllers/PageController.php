<?php

namespace App\Http\Controllers;

use App\CMSPage;
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome() {

        return view('page.home');

    }

    public function showAgenda() {

        return "soon";

    }
}

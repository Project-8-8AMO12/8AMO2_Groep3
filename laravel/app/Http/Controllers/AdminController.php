<?php

namespace App\Http\Controllers;

use App\CMSPage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexAdmin() {
        $pages = CMSPage::all();
        return view('page.admin', compact('pages'));
    }

    public function editCMS($id) {
        $page = CMSPage::find($id);
        return view('page.editCMS', compact('page'));
    }

    public function updateCMS($id, Request $request) {
        $page = CMSPage::find($id);
        $page->content_block_1 = $request->get('content_block_1');
        $page->content_block_2 = $request->get('content_block_2');
        $page->content_block_3 = $request->get('content_block_3');
        $page->content_block_4 = $request->get('content_block_4');
        $page->content_block_5 = $request->get('content_block_5');
        $page->content_block_6 = $request->get('content_block_6');
        $page->content_block_7 = $request->get('content_block_7');
        $page->content_block_8 = $request->get('content_block_8');
        $page->content_block_9 = $request->get('content_block_9');
        $page->save();

        return redirect('/admin');
    }

}

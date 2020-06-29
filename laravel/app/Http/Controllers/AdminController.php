<?php

namespace App\Http\Controllers;

use App\CMSPage;
use App\Nieuwsbrief;
use App\NieuwsbriefUsers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        $pages = CMSPage::all();
        $nieuwsbrief = Nieuwsbrief::latest()->first();
        return view('page.admin', compact('pages', 'nieuwsbrief'));
    }

    public function editCMS($id)
    {
        $page = CMSPage::find($id);
        return view('page.editCMS', compact('page'));
    }

    public function updateCMS($id, Request $request)
    {
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

    public function manageusers()
    {
        $admins = User::where('user_role', 'admin')->get();
        $mods = User::where('user_role', 'mod')->get();
        return view('page.manageuser', compact('admins', 'mods'));
    }

    public function promote($id)
    {
        $mod = User::find($id);
        $mod->user_role = "admin";
        $mod->save();
        return redirect('/manageusers');
    }


    public function delete($id)
    {
        $mod = User::find($id);
        $mod->delete();
        return redirect('/manageusers');
    }

    public function doNieuwsbrief(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'file' => 'required',
            ]);
            $name = $request->get('name');
            $file = $request->file('file');

            $nieuwsbrief = new Nieuwsbrief();
            $nieuwsbrief->name = $name;
            $nieuwsbrief->file_name = Str::random(20) . '.pdf';
            $nieuwsbrief->save();

            $file->storeAs('/nieuwsbrieven', $nieuwsbrief->file_name, 'public');

            return redirect('/admin');
        } catch(\Exception $e) {
            return $e;
        }
    }

    public function sendNieuwsbrief() {
        $users = NieuwsbriefUsers::pluck('email');
        return $users;
    }

}

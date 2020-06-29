<?php

namespace App\Http\Controllers;

use App\Nieuwsbrief;
use App\NieuwsbriefUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $users = NieuwsbriefUsers::all();
        $version = Nieuwsbrief::latest()->first();
        for($i = 0; $i < count($users); $i++) {
            $to_email = $users[$i]->email;
            $data = array('version' => $version->id);

            Mail::send('emails.mail', $data, function ($message) use ($version, $to_email) {
                $message->to($to_email)->subject('Laravel Test Mail');
                $message->from('Imkersleiden@gmail.com', 'Test Mail')->attach(storage_path("app/public/nieuwsbrieven/$version->file_name"), [
                    'as' => "nieuwsbrief$version->id.pdf",
                    'mime' => 'application/pdf',
                ]);
            });
        }
        $version->sent = 1;
        $version->save();
        return redirect('/admin');
    }
}

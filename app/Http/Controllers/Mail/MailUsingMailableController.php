<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailUsingMailableController extends Controller
{

    public function __invoke(Request $request)
    {
        try {
            #1
            $user = User::where("email", request('email'))->first();
            $mail = (new TestMail())
                ->subject('subject test');

            Mail::to($user->email)->send($mail);


            #2
            // $user = User::all();
            // Notification::send($user, new TestMail());
            return "mail sent";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

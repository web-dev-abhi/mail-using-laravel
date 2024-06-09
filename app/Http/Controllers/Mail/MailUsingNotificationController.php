<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class MailUsingNotificationController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            #1
            // $user = User::where("email", request('email'))->first();
            // $user->notify(new TestMail());


            #2
            // $user = User::all();
            // Notification::send($user, new TestMail());
            return "mail sent";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

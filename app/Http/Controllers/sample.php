<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testmail;
use Illuminate\Support\Facades\Mail;

class sample extends Controller
{
    public function Mail() {
    return view('sample-mail');
    }
    public function send(Request $request)
    {
        $detail = [
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ];

     Mail::to($detail['email'])->send(new testmail($detail));
     echo "<h2>'success', 'message sent successfully'</h2>";
    }
}
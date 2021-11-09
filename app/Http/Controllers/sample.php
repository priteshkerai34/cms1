<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testmail;
use Illuminate\Support\Facades\Mail;

class sample extends Controller
{
    public function sendemail() {
        $detail = [
            "title" => "this is sample mail from laravel",
            "body" => "test mail from laravel"
        ];
        Mail::to('UdayRamani2531@gmail.com')->send(new testmail($detail));
 
  echo "<h3>Email is Sent, please check your inbox.<h3>";
    }
}

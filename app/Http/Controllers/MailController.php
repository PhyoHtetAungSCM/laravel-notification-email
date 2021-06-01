<?php

namespace App\Http\Controllers;

use App\Mail\NotifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
  public function notifyEmail(Request $request) {
    $name = $request->name;
    $email = $request->email;

    Mail::to($email)->send(new NotifyEmail($name));

    return "<h1>Your Email Is Successfully Sent</h1>";
  }
}

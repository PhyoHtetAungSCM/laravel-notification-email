<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
  return view('create-user');
});

Route::post('/notify-email', [MailController::class, 'notifyEmail']);

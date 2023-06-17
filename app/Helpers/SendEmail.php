<?php

namespace App\Helpers;

use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;

class SendEmail
{
    public static function send($mailData)
    {
        $mailData = (object) $mailData;

        $mail = new UserMail($mailData);

        $sentEmail =  Mail::to($mailData->email)->send($mail);

        return $sentEmail;
    }
}

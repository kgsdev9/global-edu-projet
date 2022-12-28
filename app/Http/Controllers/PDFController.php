<?php

namespace App\Http\Controllers;

use PDF;
use Mail;


class PDFController extends Controller
{
    public function index()

    {

        $data["email"] = "kgsdev8@gmail.com";
        $data["title"] = "TEST DE GUY";
        $data["body"] = "Je teste les nouvelles functionnalites d'envoi email laravel par pdf";
        $pdf = PDF::loadView('notifications', $data);
        Mail::send('notifications', $data, function($message)use($data, $pdf) {

            $message->to($data["email"], $data["email"])

                    ->subject($data["title"])

                    ->attachData($pdf->output(), "text.pdf");

        });



        dd('Mail sent successfully');

    }



}

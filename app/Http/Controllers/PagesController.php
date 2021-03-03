<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function home()
    {
        $acceptCookie = Session::get('acceptCookie', false);
        $fromSearchers = Session::get('fromSearchers', false);

        return view('pages.home', [
            'noIndex' => false,
            'acceptCookie' => $acceptCookie,
            'fromSearchers' => $fromSearchers,
        ]);
    }

    public function serp()
    {
        $acceptCookie = Session::get('acceptCookie', false);
        $fromSearchers = Session::get('fromSearchers', false);
        return view('pages.seo', [
            'noIndex' => false,
            'acceptCookie' => $acceptCookie,
            'fromSearchers' => $fromSearchers,
        ]);
    }

    public function faq()
    {
        $acceptCookie = Session::get('acceptCookie', false);

        return view('pages.faq', [
            'noIndex' => false,
            'acceptCookie' => $acceptCookie,
        ]);
    }

    public function cookies()
    {
        $acceptCookie = Session::get('acceptCookie', false);
        return view('pages.cookies', [
            'noIndex' => true,
            'acceptCookie' => $acceptCookie,
        ]);
    }

    public function contact()
    {
        $acceptCookie = Session::get('acceptCookie', false);
        return view('pages.contact', [
            'noIndex' => false,
            'acceptCookie' => $acceptCookie,
        ]);
    }

    public function sendContactEmails()
    {
        $details = [
            'title' => 'Contacto realizado exitosamente con Contadordepalabrasonline.com',
            'body' => 'Recibimos su consulta, nos pondremos en contacto a la brevedad'
        ];

        Mail::to(request()->email)->send(new \App\Mail\ContactMail($details));

        $title = "Contacto a Contadordepalabrasonline.com de " . request()->name . " direccion de correo " . request()->email;
        $msg = request()->message;

        Mail::to('contadordepalabrasonline@gmail.com')->send(new \App\Mail\ContactMailForUs($title, request()->subject, $msg));

        return redirect()->back()->with('success', 'Tu consulta se envió correctamente');
    }

    public function about()
    {
        $acceptCookie = Session::get('acceptCookie', false);
        return view('pages.about', [
            'noIndex' => false,
            'acceptCookie' => $acceptCookie,
        ]);
    }

    public function acceptCookies()
    {
        Session::put('acceptCookie', true);
        return response()->json([
           'success' => true,
           'message' => 'Cookies accepted'
        ]);
    }
}

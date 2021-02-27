<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function acceptCookies()
    {
        Session::put('acceptCookie', true);
        return response()->json([
           'success' => true,
           'message' => 'Cookies accepted'
        ]);
    }
}

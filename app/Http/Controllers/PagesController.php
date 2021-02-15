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
            'acceptCookie' => $acceptCookie,
            'fromSearchers' => $fromSearchers,
        ]);
    }

    public function serp()
    {
        $acceptCookie = Session::get('acceptCookie', false);
        $fromSearchers = Session::get('fromSearchers', false);
        return view('pages.seo', [
            'acceptCookie' => $acceptCookie,
            'fromSearchers' => $fromSearchers,
        ]);
    }

    public function cookies()
    {
        $acceptCookie = Session::get('acceptCookie', false);
        return view('pages.cookies', [
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

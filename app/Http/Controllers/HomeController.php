<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        // dd($currentUser->id);
        return view('home');
    }
}

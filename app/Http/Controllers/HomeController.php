<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "total" => count(User::all()),
            "newses" => News::orderBy('created_at','desc')->take(10)->get()
        ];
        return view('home',$data);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $data = [
            "users" => User::all(),
            "newses" => News::orderBy('created_at','desc')->take(10)->get()
        ];
        return view('admin',$data);
    }
}

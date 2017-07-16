<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;

class DataController extends Controller
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
    public function userUpdate(Request $rq,$id){
        $code = 200;
        $user = User::find($id);
        $rs=[];
        if(is_null($user) || $user==false)$code=404;
        else{
            $rs = $user->fill($rq->all())->save();
        }
        return response()->json($rs,$code,['Content-Type' => 'application/json; charset=utf-8'],JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
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

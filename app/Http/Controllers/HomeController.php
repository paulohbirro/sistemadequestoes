<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request, Questions $question)
    {
        $question = $question->where('created_at','<=',now())
                             ->where('users_id','!=',Auth::user()->name)
                             ->orderBy('created_at')->paginate();

        return view('home')->with(compact('question'));
    }
}

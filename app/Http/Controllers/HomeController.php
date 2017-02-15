<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $request->session()->put([
//            'name'      =>  'Ibrahim',
//            'surname'   =>  'Behbudov'
//        ]);

//        return $request->session()->all();

        $user = Auth::user();

        return view('home', compact('user'));

//        session(['name' =>  'dosi']);


    }
}

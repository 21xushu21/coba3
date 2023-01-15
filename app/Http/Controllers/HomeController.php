<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function create(Request $request)
    {
        $dp = new DataDiri();

            $dp->nama=$request->nama;
            $dp->alamat=$request->alamat;
            $dp->email=$request->email;
            $dp->no_hp=$request->no_hp;

            $dp->save();

    }
}

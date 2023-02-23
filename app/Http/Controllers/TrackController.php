<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\track;

class TrackController extends Controller
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
        return view('track');
    }

    public function track(Request $request)
    {
        $posts = $request -> all();
        dd($posts);

        Memo::DB::insert([1, 'Dayle']);
        return view('track');
    }
}

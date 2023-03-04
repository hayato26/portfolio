<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\track;

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
        $posts = $request->all();
        // dd(\Auth::id());

        Track::insert(['name' =>$posts['name'], 'track_type' =>$posts['track_type'], 'start'=>$posts['start'] , 'finish'=>$posts['finish'], 'managers_id' => \Auth::id()]);
        // return view('track');
        return redirect( route('track') );
    }
}

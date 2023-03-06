<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\track;

class TrackListController extends Controller
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
    public function track_list()
    {
        $tracks = Track::select('name', 'start', 'finish')
            ->where('managers_id', '=', \Auth::id())
            ->whereNull('deleted_at')
            ->orderBy('start' , 'DESC')
            ->get();
            // dd($tracks);

        return view('track_list', compact('tracks'));
    }

    // public function track(Request $request)
    // {
    //     $posts = $request->all();
 
    //     return redirect( route('track') );
    // }
}

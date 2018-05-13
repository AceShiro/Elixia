<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
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

    public function dashboard()
    {
        $lastUsers = User::where('verified', '=', '1')->orderBy('created_at', 'desc')->take(7)->get();
        $verifiedUserCount = User::where('verified', '=', '1')->count();

        $eventCount = Event::count();
        if ($eventCount != 0) {
            $lastEvents = Event::orderBy('event_when', 'desc')->take(7)->get();
        }

        if (Auth::user()->admin == true)
        {
            return view('admin.pages.dashboard', compact('lastUsers', 'verifiedUserCount', 'lastEvents', 'eventCount'));
        }
        else
        {
            return redirect('/');
        }
    }
}

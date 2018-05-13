<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
    	$events = Event::where('status', '!=', 'Finished')->orderBy('event_when', 'desc')->get();

        return view('pages.home', compact('events'));
    }
}

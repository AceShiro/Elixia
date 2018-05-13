<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\InvoiceMail;

use App\User;
use App\Event;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
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

    public function registration(Request $request, $id)
    {
    	$user = Auth::user();
    	$event = Event::find($id);

    	if ($event->availability == 0)
    	{
    		return redirect('/');
    	}
    	else 
    	{
    		$user->events()->attach($event->id);

	    	$user->increment('registered_events');
	    	$event->decrement('availability');

	    	if ($event->availability > 0) {
	    		$event->status = "Available";
	    	} elseif ($event->availability == 0) {
	    		$event->status = "Full";
	    	}

            $payment = Payment::create([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'mode' => $request->payment,
            ]);

	    	Mail::to($user->email)->send(new InvoiceMail($user, $event, $payment));
	    	return view('users.show', compact('user'));
    	}
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin == true)
        {
            $events = Event::All();

            return view('events.index', compact('events'));
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->admin == true)
        {
            return view('events.create');
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validating Form Data
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'event_when' => 'required',
            'type' => 'required|string|max:255',
            'description' => 'required',
            'availability' => 'required',
        ));

        // Store in DB
        $event = new Event;

        $event->name = $request->name;
        $event->event_when = $request->event_when;
        $event->type = $request->type;
        $event->description = $request->description;
        $event->availability = $request->availability;

        if($event->availability > 0 && $event->status != 'Finished') {
            $event->status = 'Available';
        } elseif ($event->availability == 0 && $event->status != 'Finished') {
            $event->status = 'Full';
        } else {
            $event->status = 'Finished';
        }

        $event->save();

        //Thumbnail Upload Management
        $thumbnail = $event->id.'.'.$request->thumbnail->getClientOriginalExtension();
        $request->thumbnail->move(public_path('thumbnails'), $thumbnail);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $user = Auth::user();

        if(Auth::user()->admin == true)
        {
            return view('events.admin', compact('event', 'user'));
        }
        elseif ($event->availability > 0 && $event->status != 'Finished')
        {
            if (Auth::user()->events()->Find($event->id)) {
                return redirect('/');
            } else {
                return view('events.show', compact('event', 'user'));
            }   
        } 
        else 
        {
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->admin == true)
        {
            $event = Event::find($id);
            return view('events.edit', compact('event'));
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validating Form Data
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'event_when' => 'required',
            'type' => 'required|string|max:255',
            'description' => 'required',
            'availability' => 'required',
            'status' => 'required',
        ));

        $event = Event::find($id);

        $event->name = $request->name;
        $event->event_when = $request->event_when;
        $event->type = $request->type;
        $event->description = $request->description;
        $event->availability = $request->availability;
        $event->status = $request->status;

        if($event->availability > 0 && $event->status != 'Finished') {
            $event->status = 'Available';
        } elseif ($event->availability == 0 && $event->status != 'Finished') {
            $event->status = 'Full';
        } else {
            $event->status = 'Finished';
        }


        $event->save();

        return view('events.admin', compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('events');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; //add Event Model

class FullCalendarController extends Controller
{
    public function getEvent(){
        if(request()->ajax()){
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $events = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                    ->get(['id','title','start as start', 'end as end']);
            return response()->json($events);
        }
        return view('fullcalendar')->with('message', 'The event has been added');
    }
    public function createEvent(Request $request){

        $data = $request->except('_token');

        $events = Event::insert($data);

        return response()->json($events);
    }

    public function deleteEvent(Request $request){
        $event = Event::find($request->id);
        if($event){
            $event->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    public function updateEvent(Request $request)
    {
        $event = Event::find($request->id);
        if ($event) {
            $event->title = $request->title;
            $event->start = $request->start;
            $event->end = $request->end;
            $event->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}

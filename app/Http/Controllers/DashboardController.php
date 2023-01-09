<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
class DashboardController extends Controller
{
    public function index()
    {   // Status Event S : Sedang Berjalan; Y : Selesai; N : Dibatalkan;
        //$events = Event::where('user_id', Session::get('id'))->get();
        $events = Event::where('user_id', '1')->get();        
        $eventsCount = count($events);
        $eventsOngoing = Event::where('user_id', '1')->where('event_status', 'S')->get();
        $eventsOngoingCount = count($eventsOngoing);
        $eventsDone = Event::where('user_id', '1')->where('event_status', 'Y')->get();
        $eventsDoneCount = count($eventsDone);
        $eventsCancel = Event::where('user_id', '1')->where('event_status', 'N')->get();
        $eventsCancelCount = count($eventsCancel);
        
        return view("pages.dashboard.dashboard")->with([
            'eventsCount' => $eventsCount,
            'eventsOngoingCount' => $eventsOngoingCount,
            'eventsDoneCount' => $eventsDoneCount,
            'eventsCancelCount' => $eventsCancelCount,
            'position' => 'dashboard']);
    }
}

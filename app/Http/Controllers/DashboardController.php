<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\EventResource;
use App\Models\ResourceDetail;
use App\Models\ResourceCategory;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Exception;

class DashboardController extends Controller
{
    protected $name = "";

    public function __construct()
    {
        if(!Session::has('id')){
            return redirect("/login")->send();
        }

        $user = User::where('user_id', Session::get('id'))->first();

        if(!empty($user)){
            $this->name = $user->user_full_name;
        }
    }

    public function index()
    {   // Status Event S : Sedang Berlangsung; Y : Selesai; N : Dibatalkan;
        //$events = Event::where('user_id', Session::get('id'))->get();
        $events = Event::where('user_id', Session::get('id'))->get();        
        $eventsCount = count($events);
        $eventsOngoing = Event::where('user_id', Session::get('id'))->where('event_status', 'S')->get();
        $eventsOngoingCount = count($eventsOngoing);
        $eventsDone = Event::where('user_id', Session::get('id'))->where('event_status', 'Y')->get();
        $eventsDoneCount = count($eventsDone);
        $eventsCancel = Event::where('user_id', Session::get('id'))->where('event_status', 'N')->get();
        $eventsCancelCount = count($eventsCancel);
        
        // Status Event Resource A : Approved, D : Declined, W : Waiting, C : Cancel
        $topEvents =DB::table('event_resources')
        ->select(DB::raw('COUNT(*), event_id'))
        ->where('er_status','=','A')
        ->groupBy('event_id')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(5)
        ->get();
        
        foreach ($topEvents as $topEvent) {
            $eventId = $topEvent->event_id;
            $event = Event::where('event_id', $eventId)->with(['eventresources'])->get();
            $arrayOfEvents[] =$event;  
        }
        
        $allEvents = Event::orderBy('start_date', 'DESC')->get();

        return view("pages.dashboard.dashboard")->with([
            'eventsCount' => $eventsCount,
            'eventsOngoingCount' => $eventsOngoingCount,
            'eventsDoneCount' => $eventsDoneCount,
            'eventsCancelCount' => $eventsCancelCount,
            'arrayOfEvents'=> $arrayOfEvents,
            'allEvents' => $allEvents,
            'position' => 'dashboard', 
            'name' => $this->name]);
    }
    public function store(Request $request)
    {
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();
        try {   
            $event = EventResource::create([
                'user_id' => Session::get('id'),
                'event_id' => $request->event_id,
                'apply_date' =>$current_date_time,
                'er_status' => 'W',
            ]);

            Session::flash('success', "Berhasil Apply ke Event");
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return redirect("/dashboard");
    }
}

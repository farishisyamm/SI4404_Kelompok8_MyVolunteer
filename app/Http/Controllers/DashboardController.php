<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\EventResource;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
        
        // Status Event Resource A : Approved, D : Declined, W : Waiting, C : Cancel
        $topEvents =DB::table('event_resources')
        ->select(DB::raw('COUNT(*) as \'resource_applied'),'event_id')
        ->where('er_status','=','A')
        ->groupBy('event_id')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(5)
        ->get();

        return view("pages.dashboard.dashboard")->with([
            'eventsCount' => $eventsCount,
            'eventsOngoingCount' => $eventsOngoingCount,
            'eventsDoneCount' => $eventsDoneCount,
            'eventsCancelCount' => $eventsCancelCount,
            'topEvents'=> $topEvents,
            'position' => 'dashboard', 
            'name' => $this->name]);
    }
}
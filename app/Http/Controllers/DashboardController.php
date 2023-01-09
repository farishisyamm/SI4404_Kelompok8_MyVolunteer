<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
class DashboardController extends Controller
{
    public function index()
    {
        //$events = Event::where('user_id', Session::get('id'))->get();
        $events = Event::where('user_id', '1')->get();
        $eventsCount = count($events);
        return view("pages.dashboard.dashboard")->with(['eventsCount' => $eventsCount, 'position' => 'dashboard']);
    }
}

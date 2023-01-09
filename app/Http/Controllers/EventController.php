<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Event;
use App\Models\EventResource;
use App\Models\EventDetail;
use App\Models\ResourceCategory;
use App\Models\ResourceDetail;
use Illuminate\Http\Request;

use Session;

class EventController extends Controller
{
    // Status Event S : Sedang Berjalan; Y : Selesai; N : Dibatalkan;

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
    {
        $events = Event::where('user_id', Session::get('id'))->with(['eventresources'])->get();
        return view("pages.dashboard.event")->with(['events' => $events, 'position' => 'event', 'name' => $this->name]);
    }
 
    public function create()
    {
        $resource_categories = ResourceCategory::all();
        return view("pages.dashboard.add")->with(['resource_categories' => $resource_categories, 'position' => 'event', 'name' => $this->name]);
    }

    public function add_detail(){
        return view("pages.dashboard.adddetail")->with(['position' => 'event', 'name' => $this->name]);
    }

    public function store(Request $request)
    {
        try {   
            $event = Event::create([
                'user_id' => Session::get('id'),
                'event_name' => $request->event_name,
                'event_location' => $request->event_location,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'resource_need' => $request->resource_need,
                'event_description' => $request->event_description,
                'event_status' => 'S',
                'reward' => $request->reward
            ]);

            foreach ($request->categories as $value) {
                ResourceDetail::create([
                    'resource_category_id' => $value,
                    'event_id' => $event->event_id
                ]);
            }

            Session::flash('success', "Berhasil Menambahkan Event");
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return redirect("/event");
    } 

    public function store_event_detail(Request $request, $id)
    {
        try {   
            $event = EventDetail::create([
                'event_id' => $id,
                'event_key' => 'event_info',
                'event_value' => "$request->file;;;$request->title;;;$request->description;;;$request->date",
                'event_type' => 'log'
            ]);

            Session::flash('success', "Berhasil Menambahkan Detail Event");
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        $this->show($id);
    } 

    public function store_resource_detail(Request $request, $id)
    {
        try {   
            ResourceDetail::create([
                'resource_category_id' => $value,
                'event_id' => $id
            ]);

            Session::flash('success', "Berhasil Menambahkan Ketegori Resource Event");
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        $this->show($id);
    }

    public function event_resources($id){
        return EventResource::with('users')->where('event_id', $id)->get();
    }

    public function show($id)
    {
        $event = Event::where('event_id', $id)->first();
        $event_resources = $this->event_resources($id);
        $resouce_details = ResourceDetail::with('resourceCategories')->where('event_id', $id)->get();
        return view("pages.dashboard.edit")->with(['event' => $event, 'event_resources' => $event_resources, 'resouce_details' => $resouce_details, 'position' => 'event', 'name' => $this->name]);
    }

    public function show_detail_event($id)
    {
        $event_detail = EventDetail::where('event_detail_id', $id)->first();
        return view("pages.dashboard.detail")->with(['event_detail' => $event_detail, 'position' => 'event', 'name' => $this->name]);
    }

    public function update(Request $request, $id)
    {
        try {
            Event::where('event_id', $id)->update([
                'event_name' => $request->event_name,
                'event_location' => $request->event_location,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'resource_need' => $request->resource_need,
                'event_description' => $request->event_description,
                'event_status' => $request->event_status,
                'reward' => $request->reward
            ]);

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return redirect("/profile");
    }

    public function update_detail_event(Request $request, $idevent, $id)
    {
        try {
            EventDetail::where('event_detail_id', $id)->update([
                'event_id' => $request->event_id,
                'event_key' => $request->event_key,
                'event_value' => $request->event_value,
                'event_type' => $request->event_type
            ]);

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        $this->show($idevent);
    } 

    public function accept_event_resource(Request $request, $id)
    {
        try {
            EventResource::where('event_resource_id', $id)->update([
                'er_status' => 'A'
            ]);

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return redirect("/event");
    }

    public function reject_event_resource(Request $request, $id)
    {
        try {
            EventResource::where('event_resource_id', $id)->update([
                'er_status' => 'D'
            ]);

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return redirect("/event");
    }

    public function destroy($id)
    {
        Event::where('event_id', $id)->delete();
        return redirect("/event");
    }

    public function destroy_resource_detail($idevent, $id)
    {
        ResourceDetail::where('resource_detail_id', $id)->delete();
        $this->show($idevent);
    }

    public function destroy_event_detail($idevent, $id)
    {
        EventDetail::where('event_detail_id', $id)->delete();
        $this->show($idevent);
    }
}

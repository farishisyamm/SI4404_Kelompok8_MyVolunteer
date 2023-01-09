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
    // Status Event S : Sedang Berlangsung; Y : Selesai; N : Dibatalkan;

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
        if(Session::get('status_user') == 'V'){
            $events = Event::with(['eventresources'])->whereHas('eventresources', function ($query) {
                $query->where('user_id', '=', Session::get('id'));
            })->get();
        }
        
        return view("pages.dashboard.event")->with(['events' => $events, 'position' => 'event', 'name' => $this->name]);
    }
 
    public function create()
    {
        $resource_categories = ResourceCategory::all();
        return view("pages.dashboard.add")->with(['resource_categories' => $resource_categories, 'position' => 'event', 'name' => $this->name]);
    }

    public function add_detail($id){
        return view("pages.dashboard.adddetail")->with(['position' => 'event', 'name' => $this->name, 'id' => $id]);
    }

    public function store(Request $request)
    {
        try {   
            $event = Event::create([
                'user_id' => Session::get('id'),
                'event_name' => $request->event_name,
                'event_location' => $request->location,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'resource_need' => $request->resource_need,
                'event_description' => $request->description,
                'event_status' => 'S',
                'reward' => $request->reward
            ]);

            if(isset($request->categories)){
                foreach ($request->categories as $value) {
                    ResourceDetail::create([
                        'resource_category_id' => $value,
                        'event_id' => $event->event_id
                    ]);
                }
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
            $file= $request->file('image');
            $img_name = time()."-".$file->getClientOriginalName();
            $file->move(public_path('images'), $img_name);

            $event = EventDetail::create([
                'event_id' => $id,
                'event_key' => 'event_info',
                'event_value' => "$img_name;;;$request->title;;;$request->description;;;$request->date",
                'event_type' => 'log'
            ]);

            Session::flash('success', "Berhasil Menambahkan Detail Event");
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return $this->show($id);
    } 

    public function event_resources($id){
        return EventResource::with('users')->where('event_id', $id)->get();
    }

    public function show($id)
    {
        $event = Event::where('event_id', $id)->with('eventdetails')->first();
        $event_resources = $this->event_resources($id);
        $resource_details = ResourceDetail::where('event_id', $id)->join('resource_categories', 'resource_details.resource_category_id', '=', 'resource_categories.resource_category_id')->get();
        $resource_categories = ResourceCategory::all();
        return view("pages.dashboard.edit")->with(['resource_categories' => $resource_categories, 'event' => $event, 'event_resources' => $event_resources, 'resource_details' => $resource_details, 'position' => 'event', 'name' => $this->name]);
    }

    public function show_detail_event($idevent, $id)
    {
        $event_detail = EventDetail::where('event_detail_id', $id)->first();
        return view("pages.dashboard.detail")->with(['event_detail' => $event_detail, 'position' => 'event', 'name' => $this->name, 'idevent' => $idevent, 'id' => $id]);
    }

    public function update(Request $request, $id)
    {
        try {
            Event::where('event_id', $id)->update([
                'event_name' => $request->event_name,
                'event_location' => $request->location,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'resource_need' => $request->resource_need,
                'event_description' => $request->description,
                'event_status' => $request->status,
                'reward' => $request->reward
            ]);
            
            if(isset($request->categories)){
                foreach ($request->categories as $value) {
                    ResourceDetail::create([
                        'resource_category_id' => $value,
                        'event_id' => $id
                    ]);
                }
            }

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return $this->show($id);
    }

    public function update_detail_event(Request $request, $idevent, $id)
    {
        try {
            $event_detail = EventDetail::where('event_detail_id', $id)->first() ;
            $file= $request->file('image');

            $img_name = explode(";;;", $event_detail->event_value)[0];

            if($file != ""){
                unlink(public_path('images/'.$img_name));

                $img_name = time()."-".$file->getClientOriginalName();
                $file->move(public_path('images'), $img_name);
            }

            EventDetail::where('event_detail_id', $id)->update([
                'event_value' => "$img_name;;;$request->title;;;$request->description;;;$request->date"
            ]);

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return $this->show($idevent);
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
        return $this->show($idevent);
    }

    public function destroy_event_detail($idevent, $id)
    {
        $event_detail = EventDetail::where('event_detail_id', $id)->first();
        if(!empty($event_detail))
            unlink(public_path('images/'.explode(";;;", $event_detail->event_value)[0]));
        
        EventDetail::where('event_detail_id', $id)->delete();
        return $this->show($idevent);
    }
}

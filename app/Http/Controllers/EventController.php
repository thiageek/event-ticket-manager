<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EventRequest;
use App\EventModel;

class EventController extends Controller
{

  public function index() {
    $events = EventModel::orderBy('created_at', 'desc')->paginate(10);
    return view('events.index', ['events' => $events]);
  }

  public function create() {
    return view('events.create');
  }

  public function store(EventRequest $request) {
    $event = new EventModel;
    $event->name        = $request->name;
    $event->date        = $request->date;
    $event->place       = $request->place;
    $event->description = $request->description;
    $event->finish      = $request->finish;
    $event->tickets     = $request->tickets;
    $event->price       = $request->price;
    $event->save();
    return redirect()->route('events.index')->with('message', 'Event created successfully!');
  }

  public function show() {

  }

  public function edit($id) {
    $event = EventModel::findOrFail($id);
    return view('event.edit', compact('event'));
  }

  public function update(ProductRequest $request, $id) {
    $event = EventModel::findOrFail($id);
    $event->name        = $request->name;
    $event->date        = $request->date;
    $event->place       = $request->place;
    $event->description = $request->description;
    $event->finish      = $request->finish;
    $event->tickets     = $request->tickets;
    $event->price       = $request->price;
    $event->save();
    return redirect()->route('events.index')->with('message', 'Event updated successfully!'); 
  }

  public function destroy($id) {
    $event = EventModel::findOrFail($id);
    $event->delete();
    return redirect()->route('events.index')->with('message', 'Event has been deleted!'); 
  }

}

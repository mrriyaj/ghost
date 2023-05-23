<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
  public function index()
  {
    $trackers = Tracker::all();
    return view('trackers.index', compact('trackers'));
  }

  public function create()
  {
    return view('trackers.create');
  }

public function store(Request $request)
{
    $ipAddress = $request->input('ip_address');
    $existingTracker = Tracker::where('ip_address', $ipAddress)->first();

    if ($existingTracker) {
        return redirect()->route('trackers.index')->with('error', 'Tracker with the same IP address already exists.');
    }

    $trackerData = $request->all();
    $trackerData['user_id'] = auth()->id();
    $trackerData['date_time'] = now();

    Tracker::create($trackerData);

    return redirect()->route('trackers.index')->with('success', 'Tracker created successfully.');
}



  public function show(Tracker $tracker)
  {
    return view('trackers.show', compact('tracker'));
  }

  public function edit(Tracker $tracker)
  {
    return view('trackers.edit', compact('tracker'));
  }

  public function update(Request $request, Tracker $tracker)
  {
    $tracker->update($request->all());
    return redirect()->route('trackers.index')->with('success', 'Tracker updated successfully.');
  }

  public function destroy(Tracker $tracker)
  {
    $tracker->delete();
    return redirect()->route('trackers.index')->with('success', 'Tracker deleted successfully.');
  }
}

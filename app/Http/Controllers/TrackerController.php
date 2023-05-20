<?php

namespace App\Http\Controllers;
use App\Models\Tracker;
use App\Models\User;

use Illuminate\Http\Request;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trackers = Tracker::all();
        return view('trackers.index', compact('trackers'));
    }

    public function create()
    {
        $users = User::all(); // Fetch all users from the database
        return view('trackers.create', compact('users'));
    }

    public function store(Request $request)
    {
        $tracker = Tracker::create($request->all());
        // You can add additional logic here if needed
        return redirect()->route('trackers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

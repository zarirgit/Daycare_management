<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\TimeSlot;

class AdminController extends Controller
{
    // Show list of all enrolled children
    public function index()
    {
        $enrolls = Enroll::all();
        return view('admin.enrolls', compact('enrolls'));
    }

    // Show form for adding a new time slot
    public function create()
    {
        return view('admin.create');
    }

    // Store a new time slot in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'time_slot' => 'required|unique:time_slots|max:255',
            'capacity' => 'required|numeric|min:1',
        ]);

        TimeSlot::create($validated);

        return redirect()->route('admin.time_slots.index');
    }

    // Show form for editing an existing time slot
    public function edit(TimeSlot $time_slot)
    {
        return view('admin.edit', compact('time_slot'));
    }

    // Update an existing time slot in the database
    public function update(Request $request, TimeSlot $time_slot)
    {
        $validated = $request->validate([
            'time_slot' => 'required|unique:time_slots|max:255',
            'capacity' => 'required|numeric|min:1',
        ]);

        $time_slot->update($validated);

        return redirect()->route('admin.time_slots.index');
    }

    // Delete an existing time slot from the database
    public function destroy(TimeSlot $time_slot)
    {
        $time_slot->delete();

        return redirect()->route('admin.time_slots.index');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;

class EnrollController extends Controller
{
    public function index()
    {
        $slots = [
            [
                'time' => '9am - 5pm',
                'capacity' => 5,
                'enrollments' => Enroll::where('time_slot', '9am - 5pm')->get()
            ],
            [
                'time' => '11am - 5pm',
                'capacity' => 5,
                'enrollments' => Enroll::where('time_slot', '11am - 5pm')->get()
            ]
        ];

        return view('enroll.index', compact('slots'));
    }

    public function store(Request $request)
    {
        $slot = $request->input('time_slot');
        $enrollments = Enroll::where('time_slot', $slot)->get();

        if (count($enrollments) < 5) {
            $enroll = new Enroll();
            $enroll->child_name = $request->input('child_name');
            $enroll->time_slot = $slot;
            $enroll->save();

            return redirect()->back()->with('success', 'Enrollment successful!');
        } else {
            return redirect()->back()->with('error', 'Sorry, this time slot is full.');
        }
    }
}

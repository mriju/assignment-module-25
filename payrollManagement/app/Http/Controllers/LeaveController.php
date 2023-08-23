<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveController extends Controller
{
    public function index()
    {
        // Display a list of leave applications
        $leaves = Leave::all();
        return view('leave.index', compact('leaves'));
    }

    public function create()
    {
        // Show the leave application form
        return view('leave.create');
    }

    public function store(Request $request)
    {
        // Store a new leave application
        $leave = new Leave();
        $leave->employee_id = auth()->user()->id; // Assuming the authenticated user is the employee
        $leave->start_date = $request->input('start_date');
        $leave->end_date = $request->input('end_date');
        $leave->reason = $request->input('reason');
        $leave->save();

        return redirect()->route('leaves.index')->with('success', 'Leave application submitted successfully.');
    }
}

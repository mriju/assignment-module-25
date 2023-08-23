<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        // Display a list of employees
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        // Show the employee creation form
        return view('employee.create');
    }

    public function store(Request $request)
    {
        // Store a new employee
        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }
}

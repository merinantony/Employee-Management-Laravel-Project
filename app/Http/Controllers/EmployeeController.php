<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel; 


class EmployeeController extends Controller
{
   
 public function index(Request $request)
    {
        $query = Employee::query();

        if ($request->filled('department')) {
            $query->where('department', $request->department);
        }

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('joining_date', [$request->start_date, $request->end_date]);
        }

        $employees = $query->latest()->paginate(10);

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees,email',
            'department' => 'required|in:HR,Sales,Tech,Marketing',
            'salary' => 'required|numeric|min:0',
            'joining_date' => 'required|date',
        ]);

        Employee::create($validated);

        return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
    }

    public function export(Request $request)
    {
        return Excel::download(new EmployeesExport($request), 'employees.xlsx');
    }
}

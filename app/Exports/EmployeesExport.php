<?php

namespace App\Exports;

use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EmployeesExport implements FromView
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function view(): View
    {
        $query = Employee::query();

        if ($this->request->filled('department')) {
            $query->where('department', $this->request->department);
        }

        if ($this->request->filled('start_date') && $this->request->filled('end_date')) {
            $query->whereBetween('joining_date', [$this->request->start_date, $this->request->end_date]);
        }

        $employees = $query->get();

        return view('exports.employees', [
            'employees' => $employees,
            'totalSalary' => $employees->sum('salary'),
        ]);
    }
}

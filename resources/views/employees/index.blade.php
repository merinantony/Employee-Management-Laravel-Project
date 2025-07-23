@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="d-flex justify-content-between align-items-center">
        Employee List
        <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm">+ Add Employee</a>
    </h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Filter Form -->
    <form method="GET" action="{{ route('employees.index') }}" class="row g-3 mb-4">
        <div class="col-md-3">
            <label>Department</label>
            <select name="department" class="form-control">
                <option value="">All</option>
                @foreach(['HR', 'Sales', 'Tech', 'Marketing'] as $dept)
                    <option value="{{ $dept }}" {{ request('department') == $dept ? 'selected' : '' }}>{{ $dept }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label>Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
        </div>

        <div class="col-md-3">
            <label>End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
        </div>

        <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary me-2">Filter</button>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary me-2">Reset</a>
            <a href="{{ route('employees.export', request()->query()) }}" class="btn btn-success">Export to Excel</a>
        </div>
    </form>

    <!-- Employee Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Department</th><th>Salary</th><th>Joining Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $emp)
            <tr>
                <td>{{ $emp->name }}</td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->department }}</td>
                <td>{{ $emp->salary }}</td>
                <td>{{ $emp->joining_date }}</td>
            </tr>
            @empty
            <tr><td colspan="5">No employees found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $employees->appends(request()->input())->links() }}
</div>
@endsection

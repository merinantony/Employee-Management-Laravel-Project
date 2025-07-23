@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Employee</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label>Department</label>
            <select name="department" class="form-control" required>
                <option value="">Select</option>
                @foreach(['HR', 'Sales', 'Tech', 'Marketing'] as $dept)
                    <option value="{{ $dept }}" {{ old('department') == $dept ? 'selected' : '' }}>{{ $dept }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Salary</label>
            <input type="number" step="0.01" name="salary" class="form-control" required value="{{ old('salary') }}">
        </div>

        <div class="mb-3">
            <label>Joining Date</label>
            <input type="date" name="joining_date" class="form-control" required value="{{ old('joining_date') }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection

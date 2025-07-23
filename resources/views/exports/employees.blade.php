<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Joining Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->salary }}</td>
            <td>{{ $employee->joining_date }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3"><strong>Total Salary</strong></td>
            <td colspan="2"><strong>{{ $totalSalary }}</strong></td>
        </tr>
    </tbody>
</table>

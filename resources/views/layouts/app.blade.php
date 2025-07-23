<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
    }

    h2 {
        margin-bottom: 30px;
        font-weight: 600;
    }

    .table th {
        background-color: #343a40;
        color: #fff;
    }

    .table td, .table th {
        vertical-align: middle;
        padding: 12px 15px;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .form-label {
        font-weight: 500;
    }

    form .form-control {
        border-radius: 6px;
    }

    .btn {
        border-radius: 6px;
    }

    .btn + .btn {
        margin-left: 8px;
    }

    .alert {
        border-radius: 6px;
    }

    .pagination {
        justify-content: center;
    }
    i {
    font-size: 200px;
}

</style>

</head>
<body>
    @yield('content')
</body>
</html>

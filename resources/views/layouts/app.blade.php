<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Laravel CRUD</span>

        <a href="{{ route('categories.index') }}" class="btn btn-light">
            Categories
        </a>
    </div>
</nav>

<!-- PAGE CONTENT -->
<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
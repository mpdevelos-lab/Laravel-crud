<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Phone Book App</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Edit Contact</h2>

<form method="POST" action="/update/{{$contact->id}}">
@csrf

<div class="form-group mb-2">
<label>Email address</label>
<input type="email" class="form-control" name="email" value="{{$contact->email}}">
</div>

<div class="form-group mb-2">
<label>Phone Number</label>
<input type="text" class="form-control" name="phone" value="{{$contact->phone}}">
</div>

<div class="form-group mb-2">
<label>Name</label>
<input type="text" class="form-control" name="name" value="{{$contact->name}}">
</div>

<button type="submit" class="btn btn-primary">Update</button>

</form>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
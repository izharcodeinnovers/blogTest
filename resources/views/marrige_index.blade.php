<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Check Marrige</h2>
    <form action="{{route('marrige-result')}}" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name">Boy Name:</label>
            <input type="text" class="form-control" id="name" required placeholder="Enter name" name="boy_name">
        </div>
        <div class="mb-3 mt-3">
            <label for="dob">Boy date of birth:</label>
            <input type="date" class="form-control" id="name" required name="boy_dob">
        </div>
        <div class="mb-3 mt-3">
            <label for="father_name">Girl Name:</label>
            <input type="text" class="form-control" id="name" required placeholder="Enter father name" name="girl_name">
        </div>
        <div class="mb-3 mt-3">
            <label for="dob">Girl date of birth:</label>
            <input type="date" class="form-control" id="name" required name="girl_dob">
        </div>
        <button type="submit" class="btn btn-primary">Check</button>
    </form>
</div>

</body>
</html>

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
    <h2>Check Voting</h2>
    <form action="{{route('check-voting')}}" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" required placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="father_name">Father Name:</label>
            <input type="text" class="form-control" id="name" required placeholder="Enter father name" name="father_name">
        </div>
        <div class="mb-3 mt-3">
            <label for="mother_name">Mother Name:</label>
            <input type="text" class="form-control" id="name" required placeholder="Enter mother name" name="mother_name">
        </div>
        <div class="mb-3 mt-3">
            <label for="dob">Date of birth:</label>
            <input type="date" class="form-control" id="name" required name="dob">
        </div>
        <button type="submit" class="btn btn-primary">Check</button>
    </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale= 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://jsdelivr.net/npm/bootstap@5.1.3/dist/css.bootstrap.min.css" integrity="">
    <title>Laravel CRUD</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Add new Student</h1>

        <form action="{{route('students.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">E-mail</label>
                <input type="text"name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Age</label>
                <input type="text"name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text"name="name" class="form-control" required>
            </div><br>
            <button type="submit" class="btn btn-success">Add Student</button>
            <a href="{{route('students.index')}}" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</body>
</html>
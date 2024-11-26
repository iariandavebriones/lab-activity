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
        <h1>Edit Student</h1>

        <form action="{{route('students.update', $student->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"name="name" class="form-control" value="{{$student-> name}}" required>
            </div>
            <div class="form-group">
                <label for="name">E-mail</label>
                <input type="text"name="name" class="form-control" value="{{$student-> email}}"  required>
            </div>
            <div class="form-group">
                <label for="name">Age</label>
                <input type="text"name="name" class="form-control" value="{{$student-> age}}"  required>
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text"name="name" class="form-control" value="{{$student-> address}}" required>
            </div><br>
            <button type="submit" class="btn btn-success">Edit Student</button>
            <a href="{{route('students.index')}}" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</body>
</html>
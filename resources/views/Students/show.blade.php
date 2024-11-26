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
        <h1> {{ $student->name}}</h1>
        <p><strong>Email:</strong>{{ $student->email}}</p>
        <p><strong>Age:</strong>{{ $student->age}}</p>
        <p><strong>Adress:</strong>{{ $student->address}}</p>
        <a href="{{route('student.edit', $student->id)}}" class="btn btn-info">Edit</a>
        <form action="{{route('students.destroy', $student->id)}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{route('students.index')}}"class="btn btn-secondary">Back</a>
    </div>
</body>
</html>
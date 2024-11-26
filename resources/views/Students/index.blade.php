<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel CRUD</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Students List</h1>
        <a href="{{ route ('Students.create') }}"class="btn btn-success">Add New Student</a>

        @if (@session('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
        @endif
        <table class="table">
            <thread>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Address</th>
                <th>Actions</th>
            </thread>

            <tbody>
            @foreach ( $student as $students )
                    <tr>
                        <td>{{ $students->name }}</td>
                        <td>{{ $students->email }}</td>
                        <td>{{ $students->age }}</td>
                        <td>{{ $students->address }}</td>
                        <td>
                            <a href="{{route('students.show',$students->id) }}" class="btn btn-info">View</a>
                            <a href="{{route('student.edit', $students->id)}}" class="btn btn-info">Edit</a>
                            <form action="{{route('students.destroy', $students->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
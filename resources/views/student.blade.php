<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav>
        <ul>
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/student">Student List</a></li>
        </ul>
    </nav>

    @if (isset($edit))
    <h2>Edit Student</h2>
    <form action="/studnet/update" method="POST">
        @csrf
        <div class="form-group">
            <label for="id">StudentID:</label>
            {{-- <input type="text" name="id" value="{{ $edit->id }}" disabled> --}}
            <input type="text" name="id" value="{{ $edit->id }}" readonly>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $edit->stu_name }}" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input name="age" type="number" value="{{ $edit->age }}" required></input>
        </div>
        <div>
            <label for="grade">grade:</label>
            <select name="grade" id="grade" required>
                <option value="A" {{ $edit->grade == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ $edit->grade == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ $edit->grade == 'C' ? 'selected' : '' }}>C</option>
                <option value="F" {{ $edit->grade == 'D' ? 'selected' : '' }}>F</option>
            </select>
        </div>
        <input class="btn btn-warning mt-3" type="submit" value="Update Student">
        <a class="btn btn-primary mt-3" href="/students" role="button" id="back">Back to insert Student</a>
    </form>
@else
    <h2>Show Student</h2>
    <form action="/students/insert" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input name="age" type="number" required></input>
        </div>
        <div>
            <label for="grade">grade:</label>
            <select name="grade" id="grade" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="F">F</option>
            </select>
        </div>
        <input type="submit" value="Add Student" id="submit">
    </form>
    @endif
    <br>
    <hr>

    <h2>Student List</h2>
    <table border=2>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
        @foreach ($students as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->stu_name }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->grade }}</td>
                <td>
                    <a class="btn btn-warning" href="students/{{$item->id}}" role="button">Update</a>
                </td>
                <td>
                    <button
                        onclick="if(confirm('คุณต้องการลบ {{ $item->stu_name }} หรือไม่ ?')) 
                    { window.location.href='{{ route('delete', $item->id) }}'; }">
                        delete
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>

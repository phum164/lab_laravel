<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

</head>

<body>
    <nav>
        <ul>
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/student">Student List</a></li>
        </ul>
    </nav>

    <h2>Add Student</h2>
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
        <input type="submit" value="Add Student">
    </form>
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
            </tr>
        @endforeach
    </table>
</body>

</html>

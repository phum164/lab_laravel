<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of faculties</h1>
    <table border=2>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($facuty as $item)
            <tr>
                <td>{{$item -> facultyID }}</td>
                <td>{{$item -> facultyName}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
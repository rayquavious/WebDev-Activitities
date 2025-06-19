<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Students</h1>

    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }} - Age: {{ $student->age }} - Gender: {{ $student->gender }}</li>
        @endforeach
    </ul>
</body>
</html>

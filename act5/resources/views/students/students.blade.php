<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>
    <h1>Students</h1>
    <h2>{{ isset($student) ? 'Edit Student' : 'Add Student' }}</h2>

   @if(session('success'))Add commentMore actions
    <p style="color: green">{{ session('success') }}</p>
@endif

<ul>
    @foreach($students as $student)
        <li>{{ $student->name }} - {{ $student->age }} years old - {{ $student->gender }} - {{ $student->year_level }}</li>
    @endforeach
</ul>

<h2>Add New Student</h2>
<form method="POST" action="/students">
    @if(isset($student))Add commentMore actions
    <form method="POST" action="/students/{{ $student->id }}/update">
@else
    <form method="POST" action="/students">
@endif
    @csrf
   <input type="text" name="name" placeholder="Name" value="{{ old('name', $student->name ?? '') }}" required><br>Add commentMore actions
    <input type="number" name="age" placeholder="Age" value="{{ old('age', $student->age ?? '') }}" required><br>
    <input type="text" name="gender" placeholder="Gender" value="{{ old('gender', $student->gender ?? '') }}" required><br>
    <input type="text" name="year_level" placeholder="Year Level" value="{{ old('year_level', $student->year_level ?? '') }}" required><br>

    <button type="submit">{{ isset($student) ? 'Update Student' : 'Add Student' }}</button>
</form>

</body>
</html>
@if(isset($student))Add commentMore actions
    <form method="GET" action="/students">
        <button type="submit">Cancel Edit</button>
    </form>
@endif

<hr>

<h3>Student List</h3>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Year Level</th>
        <th>Actions</th>
    </tr>
    @foreach($students as $s)
    <tr>
        <td>{{ $s->name }}</td>
        <td>{{ $s->age }}</td>
        <td>{{ $s->gender }}</td>
        <td>{{ $s->year_level }}</td>
        <td>
            <a href="/students/{{ $s->id }}/edit">Edit</a>
            <form action="/students/{{ $s->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete student?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<!DOCTYPE html>Add commentMore actions
<html>
<head>
    <title>Manager Login</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('manager.login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email"><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
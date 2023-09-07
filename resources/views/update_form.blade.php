<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>
    <h1>Update Student</h1>
    <form method="POST" action="/update/{{ $student->id }}">
        @csrf
        <label for="student_name">Student Name:</label>
        <input type="text" id="student_name" name="student_name" value="{{ $student->name }}">
        <button type="submit">Update</button>
    </form>
    <a href="/">Back</a>
</body>
</html>

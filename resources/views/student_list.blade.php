
<head>
    <link rel="stylesheet" type="text/css"  href="{{asset('resources/css/app.css')}}">
</head>
<!DOCTYPE html>
<html>
<head>
    <title>Student List with CRUD Operations</title>
    <style>

    </style>
</head>
<body>
    <h1>Student List using CURD Operations</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>
                    <form action="delete/{{$student->id}}">
                        <button class="delete-button" type="submit">Delete this data</button>
                    </form>
                    <form action="edit/{{$student->id}}">
                        <button class="edit-button" type="submit">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/insert">Insert Data</a>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Student Insert</title>
</head>
<body>
    <h1>Student Insert</h1>

    <form action="/create" method="post">

        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

        <label for="student_name"> Name : </label>

        <input type="text" id="student_name" name="student_name" required>

        <button type="submit"> Submit </button>
    </form>

</body>
</html>

<p> Edit data </p>
<form action="/edit/{{$students[0]->id}}" method="post">
    <input type ="hidden" name ="_token" value = "<?php echo csrf_token();?>"
     <label for="student_name">Name:</label>
     <input type="text" id="student_name" name="student_name"  value = "{{$students [0]->name}}" required>
     <button type="submit">Submit</button>
 </form>

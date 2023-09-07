<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentInsertController extends Controller
{
    public function insert_form()
    {
        return view('insert_form');
    }

    public function insert(Request $request)
    {
        $name = $request->input('student_name');

        DB::insert("insert into student(name) values(?)", [$name]);
        return 'Record added <a href="/"> click </a>';
    }

    ///
    public function fetch()
{
    $students = DB::select('select * from student');

    return view('student_list', ['students' => $students]);
}

public function edit ($id){
    $students =DB::select('select * from student where id = ?', [$id]);
    return view( 'student_edit' , ['students'  => $students]);

}public function update(Request $request, $id)
{
    $name = $request->input('student_name');

    DB::update('update student set name = ? where id = ?', [$name, $id]);
    return 'Record updated successfully <a href="/">click</a>';
}

public function delete($id) {
   $a = DB::delete(
'delete from student where id = ? ' ,[$id] );

if($a=true)
{

    return 'Record deleted successfully <a href="/">click</a>';

}
else {
    return ' not del  <a href="/">click</a> ';
}

}

}

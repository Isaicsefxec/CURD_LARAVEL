<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInsertController;


Route::get('/insert', [StudentInsertController::class, 'insert_form']);
Route::post('create', [StudentInsertController::class, 'insert']);
Route::get('/', [StudentInsertController::class, 'fetch']);
Route::get
(
 'edit/{id}' ,[StudentInsertController::class,'edit']
);
Route::post('edit/{id}', [StudentInsertController::class,'update']);
Route::get
(
 'delete/{id}' ,[StudentInsertController::class,'delete']
);

<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::get('/student', [StudentController::class, 'index'])->name('student.index');

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');

Route::resource('department', DepartmentController::class);

Route::get('/Lecturer/trash', [LecturerController::class, 'trash'])->name('lecturer.trash');
Route::put('/Lecturer/{lecturer}/restore', [LecturerController::class, 'restore'])->name('lecturer.restore')->withTrashed();
Route::delete('/Lecturer/{lecturer}/force-delete', [LecturerController::class, 'forceDelete'])->name('lecturer.forceDelete')->withTrashed();

Route::resource('lecturer', LecturerController::class);

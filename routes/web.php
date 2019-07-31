<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});
Route::post('/adminlogin','admincontroller@login_dashbord');

//main





Route::post('/studentlogin','admincontroller@studentlogin_dashbord');
Route::get('/student_dashbord','admincontroller@student_dashbord');



Route::get('/student_satting','admincontroller@student_satting');
Route::get('/student_profile','admincontroller@student_profile');








//main end

Route::post('/update_student/{student_id}','admincontroller@update_student');
Route::post('/studentsupdate','admincontroller@studentsupdate');



Route::post('/update_teacher/{teacher_id}','admincontroller@update_teacher');

Route::get('/editteacher/{teacher_id}','admincontroller@editteacher');
Route::get('/teacherview/{teacher_id}','admincontroller@teacherview');






Route::get('/admin_dashbord','admincontroller@admin_dashbord');
Route::get('/studentdelete/{student_id}','admincontroller@studentdelete');
Route::get('/allstudent','admincontroller@allstudent');
Route::get('/allteacher','admincontroller@all_teacher');
Route::get('/student_logout','admincontroller@student_logout');





Route::get('/addteacher','admincontroller@add_teacher');



Route::get('/addstudent','addstudentcontroller@addstudent');
Route::get('/tutionfee','admincontroller@tutionfee');
Route::get('/cse','admincontroller@cse');
Route::get('/bba','admincontroller@bba');
Route::get('/ete','admincontroller@ete');
Route::get('/student_view/{student_id}','admincontroller@studentview');
Route::get('/editstudent/{student_id}','admincontroller@editstudent');


Route::get('/delete_teacher/{teacher_id}','admincontroller@delete_teacher');


Route::get('/logout','admincontroller@logout');
Route::get('/view','admincontroller@view');
Route::get('/satting','admincontroller@satting');
Route::post('/save_student','addstudentcontroller@save_student');
Route::post('/save_teacher','admincontroller@saveteacher');

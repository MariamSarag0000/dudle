<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admins\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Admin routes:
Route::get('/admins', 'HomeController@index')->name('home');

//Student routes:
Route::resource('/admins/students', 'admins\StudentController', ['as'=>'admins']);





//Material routes:
Route::resource('/admins/materials', 'admins\MaterialController');

//Stuff routes:
Route::resource('/admins/stuffs', 'admins\StuffController');

//Registration routes:
Route::resource('/admins/registrations', 'admins\RegistrationController', ['as'=>'admins']);














/*
Route::get('/admins/students', 'admins\StudentController@index');
Route::get('/admins/students/detail/{id}','admins\StudentController@detail');
*/


/*
Route::get('/registrationCard', function (){
    auth()->loginUsingId(1);
        $studentMaterial=\App\Student::Where('id',auth()->students()->id)->with('material')->get();
        dd($studentMaterial->toArray());
        echo 'hi';
}
*/
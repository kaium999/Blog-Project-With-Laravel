<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
/*This is Post Routing*/
Route::get('/Addpost',"App\Http\Controllers\userController@Addpostview");
Route::post('/Addpostdata',"App\Http\Controllers\userController@Addpost");




/*User Log In Routing*/
Route::get('/userDash',"App\Http\Controllers\userController@userDashGet")->middleware('isLogin');
Route::get('/clintRg',"App\Http\Controllers\clintController@clintRegistration")->middleware('Alreadylogin');
Route::post('/addClint',"App\Http\Controllers\clintController@saveClint");
Route::get('/logget',"App\Http\Controllers\userLogController@loginShow")->middleware('Alreadylogin');
Route::post('/logpost',"App\Http\Controllers\userLogController@loginCheck");
Route::get('/logout',"App\Http\Controllers\userLogController@logOut");
Route::get('/postshow',"App\Http\Controllers\userController@postShow")->middleware('isLogin');
Route::get('/Allpostshow',"App\Http\Controllers\userController@AllpostShow")->middleware('isLogin');


Route::get('delete/{id}',"App\Http\Controllers\userController@postDelete");
Route::get('edit/{id}',"App\Http\Controllers\userController@editShow");
Route::post('edit',"App\Http\Controllers\userController@updatePost");



/* Comment Routing */
Route::get("AddComment/{id}","App\Http\Controllers\commentController@CommentPage");
Route::post("AddComment","App\Http\Controllers\commentController@addComment");
Route::get("AddComment/ShowComment/{id}","App\Http\Controllers\commentController@AllCommentShow");

Route::get('AddComment/ShowComment/delete/{id}',"App\Http\Controllers\commentController@DeleteComment");
Route::get('AddComment/ShowComment/commnetEdit/{id}',"App\Http\Controllers\commentController@commentEdit");
Route::post('commnetEdit',"App\Http\Controllers\commentController@commentUpdate");
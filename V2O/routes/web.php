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

//Displays welcome page
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'welcome');
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::prefix('volorg')->group(function() {

    Route::get('/login', 'Auth\VolorgLoginController@showLoginForm')->name('volorg.login');
    Route::post('/login', 'Auth\VolorgLoginController@login')->name('volorg.login.submit');
    Route::get('/', 'VolorgController@index')->name('volorg.dashboard');
});

Route::get('showMatched', 'VolorgController@showMatched');

//Route::get('view_matched','VolorgController@index');
//Route::get('matchedvolunteers','VolorgController@index');




Route::get('/login/volorg', 'Auth\LoginController@showVolorgLoginForm');

//retrieve matched volunteers
Route::get('view-matched','VolOrgController@index');

Route::post('/login/volorg', 'Auth\LoginController@volorgLogin');

Route::view('/home', 'home')->middleware('auth');
//Route::view('/volorg', 'volorg');
//Route::get('/volorg', 'VolOrgController@index');
Route::view('/volorg', 'volorg');


//Route::view('/volorg', 'volorg')->middleware('auth');

Route::resource('interest','InterestController');
Route::get('viewall', 'InterestController@showAll');

Route::resource('vo','VoController');

Route::resource('volunteer','VolunteerController');
Route::get('volunteer/show/{id}', 'VolunteerController@show');


Route::get('/home', 'HomeController@index')->name('home');

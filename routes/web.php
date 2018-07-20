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
    return view('welcome');
});

Route::get('/phpinfo', function () {
    phpinfo();
});


Route::get('/login','UserController@loginpage');
Route::get('/register','UserController@registerpage');

Route::get('/userlist','UserController@userlistpage');
Route::get('/userform/{id}','UserController@userformpage');

Route::get('/rolelist','UserController@rolelistpage');
Route::get('/roleform/{id}','UserController@roleformpage');
Route::post('/rolesave','UserController@rolesave');
Route::get('/roleremove/{id}','UserController@roleremove');

Route::get('/modulelist','UserController@modulelistpage');
Route::get('/moduleform/{id}','UserController@moduleformpage');
Route::post('/modulesave','UserController@modulesave');
Route::get('/moduleremove/{id}','UserController@moduleremove');

Route::get('/pagelist','UserController@pagelistpage');
Route::get('/pageform/{id}','UserController@pageformpage');
Route::post('/pagesave','UserController@pagesave');
Route::get('/pageremove/{id}','UserController@pageremove');

///INFORMATION
Route::get('/toollist','InformationController@toollistpage');
Route::get('/toolform/{id}','InformationController@toolformpage');
Route::post('/toolsave','InformationController@toolsave');
Route::get('/toolremove/{id}','InformationController@toolremove');

Route::get('/pipelist','InformationController@pipelistpage');
Route::get('/pipeform/{id}','InformationController@pipeformpage');
Route::post('/pipesave','InformationController@pipesave');
Route::get('/piperemove/{id}','InformationController@piperemove');

Route::get('/jobtypelist','InformationController@jobtypelistpage');
Route::get('/jobtypeform/{id}','InformationController@jobtypeformpage');
Route::post('/jobtypesave','InformationController@jobtypesave');
Route::get('/jobtyperemove/{id}','InformationController@jobtyperemove');

Route::get('/provincelist','InformationController@provincelistpage');
Route::get('/provinceform/{id}','InformationController@provinceformpage');
Route::post('/provincesave','InformationController@provincesave');
Route::get('/provinceremove/{id}','InformationController@provinceremove');

Route::get('/placelist','InformationController@placelistpage');
Route::get('/placeform/{id}','InformationController@placeformpage');
Route::post('/placesave','InformationController@placesave');
Route::get('/placeremove/{id}','InformationController@placeremove');

Route::get('/placeshiplist','InformationController@placeshiplistpage');
Route::get('/placeshipform/{id}','InformationController@placeshipformpage');
Route::post('/placeshipsave','InformationController@placeshipsave');
Route::get('/placeshipremove/{id}','InformationController@placeshipremove');
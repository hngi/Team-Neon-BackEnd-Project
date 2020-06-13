<?php

use Symfony\Component\HttpFoundation\Session\Session;
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

URL::forceRootUrl(Config::get('app.url'));

Route::middleware('microapi.auth')->group(function () {
    
    Route::get('/', 'DashboardController@Home')->name('dashboard.home');
    
    Route::get('api/doc/api-title-here', 'DashboardController@ViewDoc')->name('api.doc');

});

Route::get('auth/login/test', function () {
    return $_REQUEST;
});
Route::get('auth/login/test', function () {
    
    $client = new \GuzzleHttp\Client(['http_errors' => false]);
    $auth = $client->request('POST', 'https://auth.microapi.dev/v1/login', [
        GuzzleHttp\RequestOptions::JSON => [
            'email' => 'Joemires20@yahoo.com',
            'password' => '123456'
        ] // or 'json' => [...]
    ]);
    
    $session = new Session();
    $session->set('auth', true);
    $stream = $auth->getBody();
    $stream->rewind(); // Seek to the beginning
    $contents = $stream->getContents(); // returns all the contents
    echo $contents;
});

Route::get('team', 'MiscController@OurTeam')->name('dev.team');

Route::get('/access/unauthorize', 'MiscController@AccessUnauthorize')->name('access.unauthorize');
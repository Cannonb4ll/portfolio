<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->post('/api/contact', 'ContactFormController@sendForm');

$app->get('/{any:.*}', function () {
    $css = mix('/css/app.css');
    $js = mix('/js/app.js');

    return view('index', compact('css', 'js'));
});

function mix($key)
{
    $mix = json_decode((file_get_contents(__DIR__ . '/../public/mix-manifest.json')), true);

    return $mix[$key];
}


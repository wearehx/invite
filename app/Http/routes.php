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

$app->get('/', function () use ($app) {
    return Socialite::driver('github')->redirect();
});

$app->get('callback', function () {
    $user = Socialite::driver('github')->user();
    $client = new \Github\Client();
    $client->authenticate(config('services.github.user_token'), config('services.github.user_password'), Github\Client::AUTH_URL_TOKEN);
    $client->organization('wearehx')->teams()->addMember(config('services.github.team'), $user->user['login']);

    return redirect('https://github.com/wearehx');
});

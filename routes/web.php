<?php

use App\Http\Controllers\Fortify\WebConfirmedTwoFactorAuthenticationController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

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

Route::get('/', fn() => view('welcome'))
    ->name('welcome');

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware('verified')
    ->name('dashboard');

$twoFactorMiddleware = Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
    ? [config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'password.confirm']
    : [config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')];

Route::post('/user/webconfirmed-two-factor-authentication', [WebConfirmedTwoFactorAuthenticationController::class, 'store'])
    ->middleware($twoFactorMiddleware)
    ->name('two-factor.web-confirm');
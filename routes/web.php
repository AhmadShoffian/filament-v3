<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KirimCepatController;
use App\Http\Controllers\Portal\AuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
})->name('index');



// socialite login
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

Route::prefix('portal')->group(function (){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('portal.login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/kirim-cepat', [KirimCepatController::class, 'showKirimCepatForm'])->name('portal.kirimcepat');
    Route::post('/kirim-cepat/store', [KirimCepatController::class, 'store'])->name('portal.kirimcepat.store');
    Route::get('/kirim-cepat/view', [KirimCepatController::class, 'viewKirimCepat'])->name('portal.viewKirimCepat');
    Route::get('kirim-cepat/kirim-cepat/{ticket}', [KirimCepatController::class, 'kcdetail'])->name('portal.kcdetail');

    Route::middleware(['auth:portal'])->group(function () {
        Route::get('/home/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('dashboard/create', [DashboardController::class, 'create'])->name('ticket.create');
        Route::post('dashboard/create', [DashboardController::class, 'store'])->name('ticket.store');
        Route::get('dashboard/ticket/', [DashboardController::class, 'show'])->name('tickets.show');
        Route::get('dashboard/ticket/{ticket}', [DashboardController::class, 'detail'])->name('tickets.detail');

        // chat
        Route::get('/chat/{id}', [ChatController::class, 'show'])->name('chat');

    });

});

Route::middleware('guest:portal')->group(function () {
    // Tampilkan form minta link reset password

    // Tampilkan form reset password berdasarkan token
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    // Proses reset password
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});

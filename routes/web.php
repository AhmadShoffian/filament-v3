<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\RegisterController;
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


// Route::get('/file/create', [FileController::class, 'create'])->name('file.create'); // tambahkan route baru
// Route::post('/file/store', [FileController::class, 'store'])->name('file.store'); // tambahkan route baru

// socialite login
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

Route::prefix('portal')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('portal.login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/kirim-cepat', [KirimCepatController::class, 'showKirimCepatForm'])->name('portal.kirimcepat');
    Route::post('/upload-lampiran', [KirimCepatController::class, 'uploadLampiran'])->name('upload.lampiran');
    Route::post('/kirim-cepat/store', [KirimCepatController::class, 'store'])->name('portal.kirimcepat.store');
    Route::get('/kirim-cepat/view', [KirimCepatController::class, 'viewKirimCepat'])->name('portal.viewKirimCepat');
    Route::get('/kirim-cepat/{ticket:uuid}', [KirimCepatController::class, 'kcdetail'])->name('portal.kcdetail');

    // Route::get('/tickets/{ticket}/history', [TicketController::class, 'history']);
    Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('frontend.ticket.show');



    Route::middleware(['auth:portal'])->group(function () {
        Route::get('/home/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('dashboard/create', [DashboardController::class, 'create'])->name('ticket.create');
        Route::post('dashboard/create', [DashboardController::class, 'store'])->name('ticket.store');
        Route::get('dashboard/ticket/', [DashboardController::class, 'show'])->name('tickets.show');
        Route::get('dashboard/ticket/{ticket}', [DashboardController::class, 'detail'])->name('tickets.detail');

        Route::post('/tickets/{ticket}/close', [TicketController::class, 'close'])->name('tickets.close');

        // chat
        Route::get('/chat/{ticket_id?}', function ($ticket_id) {
            return view('chat', [
                'ticket_id' => $ticket_id,
            ]);
        })->name('chat');
    });
});

Route::middleware('guest:portal')->group(function () {
    // Tampilkan form minta link reset password

    // Tampilkan form reset password berdasarkan token
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    // Proses reset password
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});

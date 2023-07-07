<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\WithdrawController;
use App\Http\Controllers\Admin\AllUserController;
use App\Http\Controllers\Admin\AllDepositController;
use App\Http\Controllers\DayConter;
use App\Http\Controllers\User\SingleDepositController;
use App\Http\Controllers\User\EditProfileController;








Route::middleware('guest')->group(function () {

    Route::get('/registers',[registerController::class, 'register']);
    Route::post('/registers',[registerController::class, 'store']);

    // Route::get('/dashboards',[Dashboard::class, 'dashboards'])->middleware(['auth'])->name('dashboards');;


    // Route::get('register', [RegisteredUserController::class, 'create'])
    //             ->name('register');

    // Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/deposit',[DepositController::class, 'deposit']);
    Route::post('/deposit',[DepositController::class, 'store']);
    Route::get('/allDeposit',[AllDepositController::class, 'allDeposit']);
    Route::any('/allDeposit/{id}',[AllDepositController::class, 'changeStatus'])
                ->name('allDeposit.changeStatus');
    Route::get('/allDeposit',[AllDepositController::class, 'allDeposit']);
    Route::get('/singleDeposit',[SingleDepositController::class, 'singleDeposit']);

    Route::get('/counter',[DayConter::class, 'counter']);



    Route::get('/withdraw',[WithdrawController::class, 'withdraw']);
    Route::post('/withdraw',[WithdrawController::class, 'withdrawT']);
    Route::get('/allWithdraw',[AllWithdrawController::class, 'allWithdraw']);
    Route::any('/allWithdraw/{id}',[AllWithdrawController::class, 'changeStatus'])
    ->name('allWithdraw.changeStatus');

    Route::get('/ref',[DayConter::class, 'ref']);



    Route::get('/allUser',[AllUserController::class, 'alluser']);
    Route::get('/edit',[EditProfileController::class, 'edit']);
    Route::get('/edit/{id}',[EditProfileController::class, 'editId']);
    Route::put('/update/{id}',[EditProfileController::class, 'update']);






    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

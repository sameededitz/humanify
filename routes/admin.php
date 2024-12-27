<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'verifyRole:admin']], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin-home');

    Route::get('/keys', [ApiKeyController::class, 'index'])->name('all-keys');
    Route::post('/key/add', [ApiKeyController::class, 'store'])->name('store-key');
    Route::put('/key/activate/{id}', [ApiKeyController::class, 'activateKey'])->name('activate-key');
    Route::delete('/key/{id}/delete', [ApiKeyController::class, 'destroy'])->name('delete-key');

    Route::get('/customers', [AdminController::class, 'AllUsers'])->name('all-users');
    Route::delete('/delete-user/{user}', [AdminController::class, 'deleteUser'])->name('delete-user');

    Route::get('/options', [OptionController::class, 'Options'])->name('all-options');
    Route::post('/options/save', [OptionController::class, 'saveOptions'])->name('save-options');

    Route::get('/contact-submissions', [ContactFormController::class, 'contactSubmissions'])->name('contact-submissions');
    Route::get('/contact-submission/{id}', [ContactFormController::class, 'showContactSubmission'])->name('admin.contact-submission.show');
    Route::delete('/contact-submissions/{submission}', [ContactFormController::class, 'deleteContactSubmission'])->name('delete-contact-submission');

    Route::get('/adminUsers', [AdminController::class, 'allAdmins'])->name('all-admins');

    Route::get('/signup', [AdminController::class, 'addAdmin'])->name('add-admin');

    Route::get('/edit-admin/{user}', [AdminController::class, 'editAdmin'])->name('edit-admin');

    Route::delete('/delete-admin/{user}', [AdminController::class, 'deleteAdmin'])->name('delete-admin');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NumberAuthController;
use App\Http\Controllers\SubmissionController;

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
    return view('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('submissions', SubmissionController::class);
    Route::resource('members', MemberController::class);

    Route::get('/accept', [FilterController::class, 'acceptSubmission'])->name('filterAccept');
    Route::get('/reject', [FilterController::class, 'rejectSubmission'])->name('filterReject');
    Route::get('/new', [FilterController::class, 'newSubmission'])->name('filterNew');

    Route::get('/search/submission', [FilterController::class, 'searchSubmission'])->name('search');
    Route::get('/search/member', [FilterController::class, 'searchMember'])->name('searchMember');

    Route::get('/sortAsc/submission', [FilterController::class, 'ascSubmission'])->name('asc');
    Route::get('/sortDesc/submission', [FilterController::class, 'descSubmission'])->name('desc');
    Route::get('/sortAsc/member', [FilterController::class, 'ascMember'])->name('ascMember');
    Route::get('/sortDesc/member', [FilterController::class, 'descMember'])->name('descMember');
});

Route::get('wizard', function () {
    return view('default');
});

Route::get('otp', [NumberAuthController::class, 'index']);
Route::post('otp/send', [NumberAuthController::class, 'send'])->name('send');



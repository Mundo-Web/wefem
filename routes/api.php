<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AboutusController as AdminAboutusController;
use App\Http\Controllers\Admin\BenefitController as AdminBenefitController;
use App\Http\Controllers\Admin\CoachController as AdminCoachController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\IndicatorController as AdminIndicatorController;
use App\Http\Controllers\Admin\ResourceController as AdminResourceController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\TestimonyController as AdminTestimonyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Coach\ResourceController as CoachResourceController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [AuthController::class, 'login']);
Route::post('signup', [AuthController::class, 'signup']);
Route::get('/sliders/media/{uuid}', [AdminSliderController::class, 'media']);
Route::get('/benefits/media/{uuid}', [AdminBenefitController::class, 'media']);
Route::get('/testimonies/media/{uuid}', [AdminTestimonyController::class, 'media']);
Route::get('/events/media/{uuid}', [AdminEventController::class, 'media']);

Route::get('/profile/{uuid}', [ProfileController::class, 'full']);
Route::get('/profile/thumbnail/{uuid}', [ProfileController::class, 'thumbnail']);
Route::get('/cover/{uuid}', [CoverController::class, 'full']);
Route::get('/cover/thumbnail/{uuid}', [CoverController::class, 'thumbnail']);

Route::post('/coaches/paginate', [CoachController::class, 'paginate']);
Route::post('/resources/paginate', [ResourceController::class, 'paginate']);

Route::middleware('auth')->group(function () {
    Route::delete('logout', [AuthController::class, 'destroy'])
        ->name('logout');

    Route::get('/dashboard/{range}', [DashboardController::class, 'revenue']);

    Route::middleware('can:Admin')->prefix('admin')->group(function () {
        Route::post('/coaches/paginate', [AdminCoachController::class, 'paginate']);
        Route::patch('/coaches/status', [AdminCoachController::class, 'status']);

        Route::post('/resources/paginate', [AdminResourceController::class, 'paginate']);
        Route::patch('/resources/status', [AdminResourceController::class, 'status']);
        Route::delete('/resources/{id}', [AdminResourceController::class, 'delete']);

        Route::post('/aboutus', [AdminAboutusController::class, 'save']);
        Route::post('/aboutus/paginate', [AdminAboutusController::class, 'paginate']);
        Route::patch('/aboutus/status', [AdminAboutusController::class, 'status']);
        Route::patch('/aboutus/{field}', [AdminAboutusController::class, 'boolean']);
        Route::delete('/aboutus/{id}', [AdminAboutusController::class, 'delete']);

        Route::post('/indicators', [AdminIndicatorController::class, 'save']);
        Route::post('/indicators/paginate', [AdminIndicatorController::class, 'paginate']);
        Route::patch('/indicators/status', [AdminIndicatorController::class, 'status']);
        Route::patch('/indicators/{field}', [AdminIndicatorController::class, 'boolean']);
        Route::delete('/indicators/{id}', [AdminIndicatorController::class, 'delete']);

        Route::post('/benefits', [AdminBenefitController::class, 'save']);
        Route::post('/benefits/paginate', [AdminBenefitController::class, 'paginate']);
        Route::patch('/benefits/status', [AdminBenefitController::class, 'status']);
        Route::patch('/benefits/{field}', [AdminBenefitController::class, 'boolean']);
        Route::delete('/benefits/{id}', [AdminBenefitController::class, 'delete']);

        Route::post('/sliders', [AdminSliderController::class, 'save']);
        Route::post('/sliders/paginate', [AdminSliderController::class, 'paginate']);
        Route::patch('/sliders/status', [AdminSliderController::class, 'status']);
        Route::patch('/sliders/{field}', [AdminSliderController::class, 'boolean']);
        Route::delete('/sliders/{id}', [AdminSliderController::class, 'delete']);

        Route::post('/testimonies', [AdminTestimonyController::class, 'save']);
        Route::post('/testimonies/paginate', [AdminTestimonyController::class, 'paginate']);
        Route::patch('/testimonies/status', [AdminTestimonyController::class, 'status']);
        Route::patch('/testimonies/{field}', [AdminTestimonyController::class, 'boolean']);
        Route::delete('/testimonies/{id}', [AdminTestimonyController::class, 'delete']);

        Route::post('/events', [AdminEventController::class, 'save']);
        Route::post('/events/paginate', [AdminEventController::class, 'paginate']);
        Route::patch('/events/status', [AdminEventController::class, 'status']);
        Route::patch('/events/{field}', [AdminEventController::class, 'boolean']);
        Route::delete('/events/{id}', [AdminEventController::class, 'delete']);

        Route::post('/faqs', [AdminFaqController::class, 'save']);
        Route::post('/faqs/paginate', [AdminFaqController::class, 'paginate']);
        Route::patch('/faqs/status', [AdminFaqController::class, 'status']);
        Route::patch('/faqs/{field}', [AdminFaqController::class, 'boolean']);
        Route::delete('/faqs/{id}', [AdminFaqController::class, 'delete']);
    });

    Route::middleware('can:Coach')->prefix('coach')->group(function () {
        Route::post('/resources', [CoachResourceController::class, 'save']);
        Route::post('/resources/paginate', [CoachResourceController::class, 'paginate']);
        Route::patch('/resources/status', [CoachResourceController::class, 'status']);
        Route::delete('/resources/{id}', [CoachResourceController::class, 'delete']);
    });

    Route::post('/profile', [ProfileController::class, 'saveProfile']);
    Route::patch('/profile', [ProfileController::class, 'save']);

    Route::post('/cover', [CoverController::class, 'saveCover']);

    Route::patch('/account/email', [AccountController::class, 'email']);
    Route::patch('/account/password', [AccountController::class, 'password']);
});

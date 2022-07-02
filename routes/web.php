<?php

use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});




Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('Offer' , [OfferController::class , 'index']);
    Route::get('Offer/create' , [OfferController::class , 'create']);
    Route::post('Offer/Store' , [OfferController::class , 'store'])->name('offer.store');
    Route::get('Offer/getalldata' , [OfferController::class , 'GetAllOffer'])->name('offer.GetAllOffer');
    Route::get('Offer/edite/{offer_id}' , [OfferController::class , 'edite'])->name('offer.OfferEdite');
    Route::post('Offer/update/{offer_id}' , [OfferController::class , 'update'])->name('offer.Update');
    Route::get('Offer/viedo' , [OfferController::class , 'VideoView'])->name('offer.VideoView');


});

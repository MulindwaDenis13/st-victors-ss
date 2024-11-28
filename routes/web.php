<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\FilerController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\TechnologiesController;
use App\Http\Controllers\WorkController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('ckeditor/upload',[CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

Route::post('ajax_upload_file',[FilerController::class, 'upload'])->name('filer.image-upload');
Route::post('ajax_remove_file',[FilerController::class, 'fileDestroy'])->name('filer.image-remove');

/*Classes Start*/

Route::get('services',[ServicesController::class, 'index'])->name('services.list');
Route::get('service/{slug}',[ServicesController::class, 'detail'])->name('services.detail');

Route::get('packages',[PackagesController::class, 'index'])->name('packages.list');

Route::get('testimonials',[TestimonialsController::class, 'index'])->name('testimonials.list');
Route::get('industries',[IndustriesController::class, 'index'])->name('industries.list');
Route::get('technologies',[TechnologiesController::class, 'index'])->name('technologies.list');

/*End Classes*/


/*Clear Cache*/
Route::get('/clear-route', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
 
    return "Cache cleared successfully";
 });
 Route::get('/clear-cache', function () {
   $exitCode = Artisan::call('config:clear');
   $exitCode = Artisan::call('cache:clear');
   $exitCode = Artisan::call('config:cache');
   return 'DONE'; //Return anything
 });


/*Blogs Start*/
Route::get('blog',[BlogsController::class, 'index'])->name('blogs.list');
Route::get('blog/{slug}',[BlogsController::class, 'detail'])->name('blogs.detail');
Route::get('work/{slug}',[WorkController::class, 'detail'])->name('work.detail');
Route::get('our-work',[WorkController::class, 'index'])->name('work.list');

/*End Blogs*/

/*Contact Us Start*/
Route::get('contact-us',[ContactusController::class, 'index'])->name('contact.index');
Route::post('contact-us',[ContactusController::class, 'store'])->name('contact.post');

Route::post('news-letter',[NewsLetterController::class, 'store'])->name('newsletter.post');

/*End Contact Us*/
Route::get('/import',[CmsController::class, 'import'])->name('cms.import');
Route::get('/filter-states',[CmsController::class, 'filterStates'])->name('filter-states');
Route::get('/filter-cities',[CmsController::class, 'filterCities'])->name('filter-cities');
Route::get('/faqs',[CmsController::class, 'features'])->name('cms.features');
Route::get('/{slug}',[CmsController::class, 'index'])->name('cms.page');
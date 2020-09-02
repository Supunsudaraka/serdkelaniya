<?php

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
Route::redirect('/', '/en');
Route::redirect('/register', '/en');



Route::group(['prefix' => '{language}'], function () {
    Auth::routes();

    Route::get('/admin', function () {
        return view('administrator.login');
    })->name('admin')->middleware('guest');

    Route::get('/', 'IndexController@index')->name('welcome');
    Route::get('changeLang', 'IndexController@storeLang')->name('changeLanguage');
    Route::get('contact-us', 'ContactUsController@contactUsIndex')->name('contact-us');
    Route::get('victories', 'VictoryController@victories')->name('victories');
    Route::get('news', 'NewsController@news')->name('news');
    Route::get('victory-view', 'VictoryController@show')->name('victory-view');
    Route::get('news-view', 'NewsController@show')->name('news-view');


    Route::get('about', function () {
        return view('about');
    })->name('about');

    //Event
    Route::get('event-list', 'EventController@listView')->name('event-list');
    Route::get('event-view', 'EventController@view')->name('event-view');

    //Activity
    Route::get('activities', 'ActivityController@index')->name('activities');
    Route::get('activity-show', 'ActivityController@show')->name('activity-show');


    //Event Management : END

    Route::group(['middleware' => 'auth', 'prefix' => ''], function () {

        Route::get('/home', 'AdminController@dashboard')->name('dashboard');

        //Admin Event Management
        Route::get('add-event', 'AdminEventController@addEvent')->name('add-event');
        Route::get('view-events', 'AdminEventController@viewEvent')->name('view-events');
        Route::post('event-store', 'AdminEventController@store')->name('event-store');
        Route::post('deleteByEventId', 'AdminEventController@deleteEvent')->name('deleteByEventId');
        Route::get('edit-event', 'AdminEventController@editEvent')->name('edit-event');
        Route::post('getEventDetailById', 'AdminEventController@getEventDetailById')->name('getEventDetailById');
        Route::post('deleteImageById', 'AdminEventController@deleteImageById')->name('deleteImageById');
        Route::post('edit-event-upload', 'AdminEventController@editImage')->name('edit-event-upload');
        Route::post('eventUpdate', 'AdminEventController@update')->name('eventUpdate');

        Route::post('deleteImages','AdminEventController@deleteImages');
        Route::post('event-upload', 'AdminEventController@upload')->name('event-upload');
        //Admin Event Management : END

        //Admin Activity Management
        Route::get('add-activity', 'AdminActivityController@index')->name('add-activity');
        Route::get('view-activities', 'AdminActivityController@viewActivity')->name('view-activities');
        Route::post('activity-store', 'AdminActivityController@store')->name('activity-store');
        Route::post('deleteByActivityId', 'AdminActivityController@deleteActivity')->name('deleteByActivityId');
        Route::get('edit-activity', 'AdminActivityController@editActivity')->name('edit-activity');
        Route::post('getActivityDetailById', 'AdminActivityController@getActivityDetailById')->name('getActivityDetailById');
        Route::post('activity-deleteImageById', 'AdminActivityController@deleteImageById')->name('activity-deleteImageById');
        Route::post('edit-activity-upload', 'AdminActivityController@editImage')->name('edit-activity-upload');
        Route::post('activityUpdate', 'AdminActivityController@update')->name('activityUpdate');

        Route::post('activity-deleteImages','AdminActivityController@deleteImages')->name('activity-deleteImages');
        Route::post('activity-upload', 'AdminActivityController@upload')->name('activity-upload');
        //Admin Activity Management :END

        //Victory Management
        Route::get('add-victory', 'VictoryController@addVictory')->name('add-victory');
        Route::post('victory-store', 'VictoryController@store')->name('victory-store');
        Route::get('view-victory', 'VictoryController@viewVictory')->name('view-victory');
        Route::post('deleteByVictoryId', 'VictoryController@delete')->name('deleteByVictoryId');
        Route::get('edit-victory', 'VictoryController@editVictory')->name('edit-victory');
        Route::post('getVictoryDetail', 'VictoryController@getVictoryDetail')->name('getVictoryDetail');
        Route::post('victory-update', 'VictoryController@update')->name('victory-update');
        Route::post('victory-deleteImages', 'VictoryController@deleteImages')->name('victory-deleteImages');
        Route::post('victory-upload', 'VictoryController@upload')->name('victory-upload');
        Route::post('victory-deleteImage', 'VictoryController@deleteImage')->name('victory-deleteImage');
        Route::post('edit-victory-upload', 'VictoryController@editImage')->name('edit-victory-upload');

        //News Management
        Route::get('add-news', 'NewsController@addNews')->name('add-news');
        Route::post('news-store', 'NewsController@store')->name('news-store');
        Route::get('view-news', 'NewsController@viewNews')->name('view-news');
        Route::post('deleteByNewsId', 'NewsController@delete')->name('deleteByNewsId');
        Route::post('getNewsDetail', 'NewsController@getNewsDetail')->name('getNewsDetail');

        Route::get('edit-news', 'NewsController@editNews')->name('edit-news');
        Route::post('news-update', 'NewsController@update')->name('news-update');

        Route::post('news-deleteImages', 'NewsController@deleteImages')->name('news-deleteImages');
        Route::post('news-upload', 'NewsController@upload')->name('news-upload');
        Route::post('news-deleteImage', 'NewsController@deleteImage')->name('news-deleteImage');
        Route::post('edit-news-upload', 'NewsController@editImage')->name('edit-news-upload');

        Route::get('/logout', function () {
            \Illuminate\Support\Facades\Auth::logout();
            return redirect()->route('welcome', ['language' => \Illuminate\Support\Facades\App::getLocale()]);
        })->name('logout');

    });

});









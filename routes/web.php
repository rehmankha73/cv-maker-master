<?php

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

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/templetes','CVController@templetes');
Route::get('/templetes/create/{type}','CVController@create');
Route::get('/edit/{id}','CVController@edit');
Route::post('/store/{type}','CVController@store');
Route::post('/update/{id}','CVController@update');

Route::get('/dashboard','DashboardController@index');
Route::view('/adminpage','adminpage');

Route::post('/savejobpost','JobPortalController@savejobpost');
Route::post('/savecompanyprofile','JobPortalController@savecompanyprofile');
Route::get('/companyjobportal','JobPortalController@home');



Route::resource('jobs','JobPortalController');

Route::get('/jobs/qualifications/{num}','JobPortalController@FindByQualification');
Route::post('/jobs/skill','JobPortalController@FindBySkill');
Route::post('/jobs/location','JobPortalController@FindByLocation');

/*...<<<User Routes>>>.....*/

Route::namespace('User')->prefix('user')->name('user.')->middleware(['auth:web', 'verified'])->group(function () {
    Route::get( '/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('cv', 'CVController');
    Route::get('cv/pdf/{type}', 'CVController@downloadPdf');


    Route::get('/dashboard/profile','SettingsController@getProfile');
    Route::post('/dashboard/profile','SettingsController@postProfile');

    Route::get('/dashboard/contact','DashboardController@getContact');
    Route::post('/dashboard/contact','DashboardController@postContact');

    Route::resource('/dashboard/request','RequestController');

//    Route::get('/dashboard/request','RequestController@getRequest');
//    Route::post('/dashboard/request','RequestController@postRequest');

    Route::get('/dashboard/testimonial','TestimonialsController@get');
    Route::post('/dashboard/testimonial','TestimonialsController@post');


    Route::get('/dashboard/setting','SettingsController@getSetting');
    Route::post('/dashboard/setting','SettingsController@postSetting');

});

Route::view('testlogin','login');
//For User Dashboard  Account options
Route::get('cv/pdf/{type}/{user_id}', 'User\CVController@template');


/*...<<<Company Routes>>>.....*/
Route::namespace('company')->prefix('company')->name('company.')->group(function () {
    Auth::routes(['verify' => true]);

    Route::get('/', 'HomeController@index')->name('home');
    Route::middleware(['auth:company', 'verified:company.verification.notice'])->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/dashboard/profile','DashboardController@getProfile');
        Route::post('/dashboard/profile','DashboardController@postProfile');

        Route::resource('/dashboard/jobpost', 'JobPostController');
        Route::resource('/dashboard/jobpost.requests', 'JobPostRequestController');
        Route::post('/dashboard/jobsposts/{jobpost}/requests/{request}/approve', 'JobPostRequestController@approveRequest')
            ->name('jobpost.requests.approve');
        Route::post('/dashboard/jobsposts/{jobpost}/requests/{request}/disapprove', 'JobPostRequestController@disapproveRequest')
            ->name('jobpost.requests.disapprove');

        Route::get('/dashboard/contact','DashboardController@getContact');
        Route::post('/dashboard/contact','DashboardController@postContact');

        Route::get('/dashboard/testimonial','TestimonialsController@get');
        Route::post('/dashboard/testimonial','TestimonialsController@post');

        Route::get('/dashboard/setting','DashboardController@getSetting');
        Route::post('/dashboard/setting','DashboardController@postSetting');


        //Route::resource('/dashboard/request','RequestController');

        });
});

/*...<<<Admin Routes>>>.....*/

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Auth::routes(['register' => false]);

    Route::get('/', 'HomeController@index');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::resource('/dashboard/users','UsersController');

        Route::resource('/dashboard/companies','CompaniesController');

        Route::resource('/dashboard/posts','PostsController');
        Route::get('/dashboard/posts/add_new','PostsController@addNew');


        Route::resource('/dashboard/testimonials','TestimonialsController');
        Route::resource('/dashboard/ctestimonials','CTestimonialsController');

        Route::resource('/dashboard/contact','ContactController');
        Route::resource('/dashboard/companycontact','CompanyContactController');

        Route::resource('/dashboard/settings','SettingsController');
    });
});

<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/grooms', 'Frontend\PagesController@grooms')->name('grooms');
Route::get('/brides', 'Frontend\PagesController@brides')->name('brides');

Route::get('/login', 'Frontend\PagesController@login')->name('login');
Route::get('/about-us', 'Frontend\PagesController@about_us')->name('about_us');
Route::get('/terms-conditions', 'Frontend\PagesController@terms_conditions')->name('terms_conditions');
Route::get('/privacy-policy', 'Frontend\PagesController@privacy_policy')->name('privacy_policy');
Route::get('/contact-us', 'Frontend\PagesController@contact_us')->name('contact_us');
Route::any('/contact-us-post', 'Frontend\PagesController@contact_us_post')->name('contact_us_post');
Route::any('/groom-bride/{id}', 'Frontend\PagesController@single_groom_bride')->name('single_groom_bride');
Route::any('/groom-bride-gallary/{id}', 'Frontend\PagesController@single_groom_bride_gallary')->name('single_groom_bride_gallary');

Route::post('/search-groom-bride', 'Frontend\PagesController@search_groom_bride')->name('search_groom_bride');


Auth::routes();

Route::resource('registration', 'Author\RegisterController');

Route::get('member-registration-verification-done/{token}/{id}', 'Auth\RegisterController@authormailverificationdone')->name('authormailverificationdone');


//======================================== Admin route==================================
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('user-info', 'UserInfoController');
    Route::resource('success-story', 'SuccessStoryController');
    Route::resource('package-price', 'PackagePriceController');
    Route::resource('message', 'ContactController');
});

//======================================== Author route==================================
Route::group(['as' => 'member.', 'prefix' => 'member', 'namespace' => 'Author', 'middleware' => ['auth', 'member']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('basic-info', 'BasicInfoController');
    Route::resource('personal-info', 'PersonalInfoController');
    Route::resource('images', 'UserProfileImageController');
    Route::resource('preference', 'PreferenceController');
    Route::resource('sent-message', 'SentMessageController');
    Route::resource('receive-message', 'RecieveMessageController');
    Route::resource('peyment', 'PaymentController');

    Route::resource('image-access', 'ImageAccessController');
    Route::resource('image-request-receive', 'ImageReqReceiveController');

    Route::resource('sent-proposal', 'SentProposalController');
    Route::resource('receive-proposal', 'ReceiveProposalController');


    // Route::post('image-access-approved', 'ImageAccessController@imageAccessApproved')->name('image_access_approved');
    // Route::post('image-access-declined', 'ImageAccessController@imageAccessDeclined')->name('image_access_declined');
    
});

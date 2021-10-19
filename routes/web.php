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

Route::get('verifying-user', 'Frontend\PagesController@verifying_user')->name('verifying_user');

Auth::routes(['register'=>false]);

//================== Registration route==========================
Route::get('profile/create', 'Author\RegisterController@index')->name('profile_create');
Route::post('member/take', 'Author\RegisterController@author_take')->name('author_take');
Route::get('member/login', 'Author\RegisterController@login')->name('authorlogin');
Route::get('member/registration/verification', 'Auth\RegisterController@authormailverification')->name('authormailverification');
Route::get('member-registration-verification-done/{token}/{id}', 'Auth\RegisterController@authormailverificationdone')->name('authormailverificationdone');
Route::resource('registration', 'Author\AuthorRegisterController');

Route::resource('registration', 'Author\RegisterController');

Route::get('member-registration-verification-done/{token}/{id}', 'Auth\RegisterController@authormailverificationdone')->name('authormailverificationdone');


//======================================== Admin route==================================
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('user-info', 'UserInfoController');
    Route::resource('success-story', 'SuccessStoryController');
    Route::resource('package-price', 'PackagePriceController');
    Route::resource('message', 'ContactController');
    Route::resource('email-excel', 'EmailExcelController');
    Route::get('email-excel-sent','EmailExcelController@sent')->name('sentmail');
    Route::post('email-excel-send','EmailExcelController@send')->name('send');
    Route::get('email-excel-resend','EmailExcelController@resend')->name('resend');
    Route::get('email-excel-truncate','EmailExcelController@truncate')->name('truncate');

    Route::resource('division', 'DivisionController');
    Route::resource('district', 'DistrictController');
    Route::resource('thana', 'ThanaController');


    Route::group(['as' => 'user-info.', 'prefix' => 'user-info/{id}', 'namespace' => 'member'], function () {
        Route::resource('images', 'UserProfileImageController');
        Route::resource('personal-info', 'PersonalInfoController');
        Route::resource('preference', 'PreferenceController');
    });


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
    Route::get('my-biodata/{id}', 'BasicInfoController@my_biodata')->name('my_biodata');

    // Route::post('image-access-approved', 'ImageAccessController@imageAccessApproved')->name('image_access_approved');
    // Route::post('image-access-declined', 'ImageAccessController@imageAccessDeclined')->name('image_access_declined');
    
});

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

/*------ Pages ---------*/
Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/partner', 'PageController@partner')->name('partner');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/submit', 'PageController@submitContact')->name('contact.submit');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/how-it-works', 'PageController@howitworks')->name('howitworks');
Route::get('/pricing', 'PageController@pricing')->name('pricing');
Route::post('/calculate-shipping', 'PageController@shipCalculate')->name('calculate');
Route::get('/browse-categories', 'PageController@stores')->name('stores');
Route::post('/sort-stores', 'PageController@sortStores')->name('stores.sort');
Route::get('/page/{slug}', 'PageController@viewPage')->name('page');

/*------ Profile ----------*/
Route::get('/register', 'Customer\RegisterController@register')->name('customer.register');
Route::post('/register', 'Customer\RegisterController@submitRegister')->name('customer.register.submit');
Route::get('/email-verify/token/{token}/email/{email}', 'Customer\RegisterController@verifyEmail')->name('customer.verify');
Route::get('/login', 'Customer\LoginController@login')->name('customer.login');
Route::post('/login', 'Customer\LoginController@submitLogin')->name('customer.login.submit');
Route::get('/logout', 'Customer\ProfileController@logout')->name('customer.logout');
Route::get('/locker', 'Customer\ProfileController@viewProfile')->name('customer.locker');
Route::get('/settings', 'Customer\ProfileController@editProfile')->name('customer.settings');
Route::post('/edit', 'Customer\ProfileController@postProfile')->name('customer.edit.submit');
Route::get('/incoming-order', 'Customer\ProfileController@incomingOrder')->name('customer.incoming');
Route::post('/incoming-order', 'Customer\ProfileController@incomingOrderSubmit')->name('customer.incoming.submit');

/*------ Password -------*/
Route::get('/forgot-password', 'Customer\PasswordController@forgotPassword')->name('customer.forgot');
Route::post('/forgot-password', 'Customer\PasswordController@submitForgot')->name('customer.forgot.submit');
Route::get('/reset-password/token/{token}/email/{email}', 'Customer\PasswordController@resetForgot')->name('customer.reset');
Route::post('/reset-password', 'Customer\PasswordController@resetPassword')->name('customer.reset.submit');
Route::post('/change-password', 'Customer\ProfileController@changePassword')->name('customer.change.submit');

/*------ Packages ---------*/
Route::post('/package-invoice', 'Customer\PackageController@invoicePackage')->name('customer.invoice.upload');
Route::post('/confirm-package', 'Customer\PackageController@valueConfirm')->name('customer.values.confirm');

/*------ Address Book ------*/
Route::get('/address-book', 'Customer\AddressController@addressBook')->name('customer.address');
Route::get('/add-address', 'Customer\AddressController@addAddress')->name('customer.address.add');
Route::post('/add-address', 'Customer\AddressController@submitAddress')->name('customer.address.submit');
Route::get('/edit-address/{id}', 'Customer\AddressController@editAddress')->name('customer.address.edit');
Route::post('/update-address', 'Customer\AddressController@updateAddress')->name('customer.address.update');
Route::get('/delete-address/{id}', 'Customer\AddressController@deleteAddress')->name('customer.address.delete');

/*------ Shipping Preference -------*/
Route::get('/shipping-preferences', 'Customer\ShippingController@getPreference')->name('customer.ship.prefer');
Route::post('/shipping-preferences', 'Customer\ShippingController@updatePreference')->name('customer.ship.prefer.update');
Route::get('/account-doc-delete/id/{id}', 'Customer\ShippingController@deleteAccountDoc')->name('customer.account-doc.delete');
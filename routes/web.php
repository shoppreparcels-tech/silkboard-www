<?php

/*------ Pages ---------*/

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/partner', 'PageController@partner')->name('partner');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/submit', 'PageController@submitContact')->name('contact.submit');
Route::get('/terms-and-conditions', 'PageController@termsAndConditions')->name('termsAndConditions');
Route::get('/privacy-policy', 'PageController@privacyPolicy')->name('privacyPolicy');
Route::get('/refund-and-cancellation-policy', 'PageController@refundAndCancellation')->name('refundAndCancellation');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/how-it-works', 'PageController@howitworks')->name('howitworks');
Route::get('/pricing', 'PageController@pricing')->name('pricing');
Route::post('/calculate-shipping', 'PageController@shipCalculate')->name('calculate');
Route::post('/qoute/submit', 'PageController@getQuote')->name('get.quote');
Route::get('/browse-categories', 'PageController@stores')->name('stores');
Route::post('/stores/sort', 'PageController@sortStores')->name('stores.sort');
Route::get('/reviews', 'PageController@reviews')->name('reviews');
Route::post('/reviews/submit', 'PageController@submitReview')->name('reviews.submit');

Route::get('/login', 'Customer\LoginController@login')->name('customer.login');
Route::post('/login', 'Customer\LoginController@submitLogin')->name('customer.login.submit');
Route::get('/logout', 'Customer\ProfileController@logout')->name('customer.logout');

Route::get('/social/oauth/google', 'Customer\SocialAuthController@redirectGoogle')->name('customer.social.google');
Route::get('/social/callback/google', 'Customer\SocialAuthController@callbackGoogle');
Route::get('/social/oauth/facebook', 'Customer\SocialAuthController@redirectFacebook')->name('customer.social.facebook');
Route::get('/social/callback/facebook', 'Customer\SocialAuthController@callbackFacebook');

Route::get('/schedule-pickup', 'SchedulePickupController@index')->name('schedulePickup.Index');
Route::post('/schedule-pickup', 'SchedulePickupController@submit')->name('schedulePickup.Submit');
Route::get('/schedule-pickup/confirm', 'SchedulePickupController@confirm')->name('schedulePickup.confirmPickup');
Route::post('/schedule-pickup/ajexRequest', 'PageController@pickupByAjex')->name('schedulePickup.byAjex');
Route::get('/countries', 'PageController@countryList')->name('countryList');
Route::get('/feedback', 'FeedbackController@index')->name('feedback.Index');
Route::post('/feedback/submit', 'FeedbackController@submit')->name('feedback.submit');
Route::get('/feedback/confirm', 'FeedbackController@confirm')->name('feedback.confirm');
Route::get('/consolidation-service', 'PageController@consolidationService')->name('consolidationService');
Route::get('/{initial}-from-{source}-to-{destination}', 'PageController@urlTargetShipping')->name('urlTargetShipping');
Route::get('/{initial}-{contents}-from-{source}-to-{destination}', 'PageController@urlTargetSend')->name('urlTargetSend');
Route::get('/{initial}-{cprefix}-{cpostfix}-from-{source}-to-{destination}', 'PageController@urlTargetContent')->name('urlTargetContent');

Route::get('/schedule-pickup/mail', 'SchedulePickupController@mail')->name('schedulePickup.mail');
//Route::post('/api/leads', 'PageController@leads')->name('leads');

Route::get('/offer', 'PageController@airport')->name('airportOffers');
Route::get('/newsoffer', 'PageController@newspaper')->name('newspaperOffers');

Route::get('/chat-email', 'PageController@chatMailIndex')->name('chatMail.index');
Route::post('/chat-email', 'PageController@chatMailSent')->name('chatMail.sent');
Route::get('/chat-email/confirm', 'PageController@chatMailConfirm')->name('chatMail.confirm');
Route::get('/shipments', 'SchedulePickupDetailController@pickupList')->name('schedulePickup.List');
Route::get('/shipment/{id}', 'SchedulePickupDetailController@pickupView')->name('schedulePickup.View');

Route::get('/campaign', 'CampaignController@index')->name('campaign.index');
Route::get('/campaign/create', 'CampaignController@create')->name('campaign.create');
Route::post('/campaign/create', 'CampaignController@submit')->name('campaign.submit');
Route::get('/campaign/edit/{id}', 'CampaignController@edit')->name('campaign.edit');
Route::post('/campaign/edit', 'CampaignController@editSubmit')->name('campaign.editSubmit');

Route::get('/{slug}', 'PageController@viewPage')->name('page');


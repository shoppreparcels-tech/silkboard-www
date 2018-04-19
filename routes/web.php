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

Route::get('/social/oauth/google', 'Customer\SocialAuthController@redirectGoogle')->name('customer.social.google');
Route::get('/social/callback/google', 'Customer\SocialAuthController@callbackGoogle');
Route::get('/social/oauth/facebook', 'Customer\SocialAuthController@redirectFacebook')
    ->name('customer.social.facebook');
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
Route::get('/{initial}-{contents}-from-{source}-to-{destination}', 'PageController@urlTargetSend')
    ->name('urlTargetSend');
Route::get('/{initial}-{cprefix}-{cpostfix}-from-{source}-to-{destination}', 'PageController@urlTargetContent')
    ->name('urlTargetContent');
Route::get('/schedule-pickup/mail', 'SchedulePickupController@mail')->name('schedulePickup.mail');

/*-------- Flash Sale ------*/

Route::get('/mi.com', 'FlashSaleController@sales')->name('flash-sale.sales.list');
Route::get('/mi.com/redmi5A', 'FlashSaleController@index')->name('flash-sale.mi5A.index');
Route::get('/mi.com/redmi5A/detail', 'FlashSaleController@mi5ADetail')->name('flash-sale.mi5A.sale');
Route::get('/invite-friend', 'FlashSaleController@invite')->name('flash-sale.invite-friend');
Route::post('/invite-friend/send-invitation', 'FlashSaleController@sendInvitation')->name('flash-sale.sendInvitation');
Route::get('/send-otp', 'FlashSaleController@sendOtp')->name('flash-sale.otp');
Route::get('/success', 'FlashSaleController@sendOtp')->name('flash-sale.otp');

/*-------- campaign ------*/

Route::get('/campaign/{cname}/{eid}', 'CampaignController@campaignDetail')->name('campaignDetail');
Route::get('/campaign/{cname}/{channel}/{eid}', 'CampaignController@campaignDetailChannel')
    ->name('campaignDetailChannel');
Route::get('/campaigns/channel/{camp_id}', 'CampaignController@channelList')->name('channelList');
Route::get('/campaigns/channel/new/create/{camp_id}', 'CampaignController@channelCreate')->name('channelCreate');
Route::post('/campaign/channel/new/create/{camp_id}', 'CampaignController@channelSubmit')->name('channelSubmit');

/*-------- login/sign up ------*/
Route::get('/login', 'Customer\LoginController@login')->name('customer.login');
Route::post('/login/submit', 'Customer\LoginController@submitLogin')->name('customer.login.submit');
Route::get('/login/register', 'Customer\LoginController@login')->name('customer.register');
Route::post('/login/submit', 'Customer\LoginController@submitLogin')->name('customer.login.submit');
Route::get('/register', 'Customer\RegisterController@register')->name('customer.register');


Route::get('/chat-email', 'PageController@chatMailIndex')->name('chatMail.index');
Route::post('/chat-email', 'PageController@chatMailSent')->name('chatMail.sent');
Route::get('/chat-email/confirm', 'PageController@chatMailConfirm')->name('chatMail.confirm');
Route::get('/shipments', 'SchedulePickupDetailController@pickupList')->name('schedulePickup.List');
Route::get('/shipment/{id}', 'SchedulePickupDetailController@pickupView')->name('schedulePickup.View');

Route::get('/campaigns', 'CampaignController@index')->name('campaign.index');
Route::get('/campaign/create', 'CampaignController@create')->name('campaign.create');
Route::post('/campaign/create', 'CampaignController@submit')->name('campaign.submit');
Route::get('/campaigns/edit/{id}', 'CampaignController@editCampaign')->name('campaignEdit');
Route::post('/campaign/edit', 'CampaignController@editSubmit')->name('campaign.editSubmit');
Route::post('home/login', 'Customer\LoginController@homeLogin')->name('homeLogin');
Route::post('home/signup', 'Customer\RegisterController@homeSignup')->name('homeSignup');

Route::get('offer/expire', 'CampaignController@expireOffer')->name('offerExpire');

Route::get('/new-pricing', 'PageController@newPricing')->name('newPricing');
Route::get('/customer-pricing', 'PageController@customerPricing')->name('customerPricing');
Route::get('/invoice', 'InvoiceController@index')->name('invoice');

Route::get('/{slug}', 'PageController@viewPage')->name('page');


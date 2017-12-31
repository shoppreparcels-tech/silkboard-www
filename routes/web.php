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
Route::prefix('admin')->group(function(){

	/*------- Personal Shopper ------------*/
	Route::get('/shopper/orders', 'Admin\ShopperController@orders')->name('admin.shopper.orders');
	Route::get('/shopper/orders/awaiting', 'Admin\ShopperController@awaitingOrders')->name('admin.shopper.awaiting');
	Route::get('/shopper/orders/received', 'Admin\ShopperController@receivedOrders')->name('admin.shopper.received');
	Route::get('/shopper/orders/processed', 'Admin\ShopperController@processedOrders')->name('admin.shopper.processed');
	Route::get('/shopper/orders/canceled', 'Admin\ShopperController@canceledOrders')->name('admin.shopper.canceled');
	Route::get('/shopper/orders/completed', 'Admin\ShopperController@completedOrders')->name('admin.shopper.completed');

	Route::get('/shopper/orders/{orderid}', 'Admin\ShopperController@viewOrder')->name('admin.shopper.order');
	Route::post('/shopper/orders/update', 'Admin\ShopperController@updateOrder')->name('admin.shopper.update');

	/*------- Reviews ------------*/
	Route::get('/reviews', 'Admin\ReviewController@reviews')->name('admin.reviews');
	Route::post('/reviews/submit', 'Admin\ReviewController@submitReview')->name('admin.reviews.submit');
	Route::post('/reviews/update', 'Admin\ReviewController@updateReview')->name('admin.reviews.update');
	Route::post('/reviews/delete/{reviewid}', 'Admin\ReviewController@deleteReview')->name('admin.reviews.delete');

	/*------- PromoCodes --------*/
	Route::get('/promos', 'Admin\PromoController@promos')->name('admin.promos');
	Route::post('/promos/submit', 'Admin\PromoController@submitCode')->name('admin.promos.submit');
	Route::post('/promos/update', 'Admin\PromoController@updateCode')->name('admin.promos.update');

	/*------- PAGE --------*/
	Route::get('/pages', 'Admin\PageController@pages')->name('admin.pages');
	Route::get('/pages/add', 'Admin\PageController@addPage')->name('admin.pages.add');
	Route::post('/pages/submit', 'Admin\PageController@submitPage')->name('admin.pages.submit');
	Route::get('/pages/edit/{id}', 'Admin\PageController@editPage')->name('admin.pages.edit');
	Route::post('/pages/update', 'Admin\PageController@updatePage')->name('admin.pages.update');

	/*------- FAQ ---------*/
	Route::get('/faq/categories', 'Admin\FaqController@faqCats')->name('admin.faq.category');
	Route::post('/faq/category/submit', 'Admin\FaqController@submitCategory')->name('admin.faq.category.submit');
	Route::post('/faq/category/update', 'Admin\FaqController@updateCategory')->name('admin.faq.category.update');
	Route::get('/faq/category/{id}', 'Admin\FaqController@viewCategory')->name('admin.faq.category.view');
	Route::post('/faq/submit', 'Admin\FaqController@submitFaq')->name('admin.faq.submit');
	Route::post('/faq/update', 'Admin\FaqController@updateFaq')->name('admin.faq.update');
	Route::get('/faq/delete/{faqid}', 'Admin\FaqController@deleteFaq')->name('admin.faq.delete');

	/*------- Stores ---------*/
	Route::get('/stores/', 'Admin\StoreController@index')->name('admin.stores');
	Route::post('/stores/submit', 'Admin\StoreController@submitStore')->name('admin.stores.submit');
	Route::post('/stores/update', 'Admin\StoreController@updateStore')->name('admin.stores.update');
	/*Route::get('/stores/delete/id/{id}', 'Admin\StoreController@deleteStore')->name('admin.stores.delete');*/

	Route::get('/stores/categories/', 'Admin\StoreController@categories')->name('admin.categories');
	Route::post('/stores/categories/add', 'Admin\StoreController@addCategory')->name('admin.categories.add');
	Route::post('/stores/categories/update', 'Admin\StoreController@updateCategory')->name('admin.categories.update');
	/*Route::get('/stores/categories/delete/{id}', 'Admin\StoreController@deleteCategory')->name('admin.categories.delete');*/
	Route::get('/stores/category/{id}', 'Admin\StoreController@storesCategory')->name('admin.category.stores');
	Route::post('/stores/category/submit', 'Admin\StoreController@submitStoreCat')->name('admin.category.store.submit');
	Route::post('/stores/category/update', 'Admin\StoreController@updateStoreCat')->name('admin.category.store.update');
	Route::get('/stores/category/delete/{id}', 'Admin\StoreController@deleteStoreCat')->name('admin.category.store.delete');

	/*---- Shipping Country --------*/
	Route::get('/shipping/countries/', 'Admin\ShippingController@countries')->name('admin.country.list');
	Route::post('/shipping/country/', 'Admin\ShippingController@updateCountry')->name('admin.country.update');
	/*Route::post('/shipping/country/delete/{id}', 'Admin\ShippingController@deleteCountry')->name('admin.country.delete');*/

	/*---- Shipping Charges --------*/
	Route::get('/shippingrate/charges/', 'Admin\ShippingController@charges')->name('admin.shippingrates');
	Route::get('/shippingrate/{country}', 'Admin\ShippingController@shipCharge')->name('admin.shippingrate');
	Route::post('/shippingrate/submit', 'Admin\ShippingController@shippingRate')->name('admin.shippingrate.submit');
	Route::get('/shippingrate/delete/{rate}', 'Admin\ShippingController@deleteRate')->name('admin.shippingrate.delete');
	Route::post('/shippingrate/update', 'Admin\ShippingController@updateRate')->name('admin.shippingrate.update');

	/*------ Shipments ---------*/
	Route::get('/shipments', 'Admin\ShippingController@shipments')->name('admin.shipping');
	Route::get('/shipping/inqueue/', 'Admin\ShippingController@shipQueue')->name('admin.shipping.queue');
	Route::get('/shipping/inreview/', 'Admin\ShippingController@shipReview')->name('admin.shipping.review');
	Route::get('/shipping/dispatched/', 'Admin\ShippingController@shipDispatched')->name('admin.shipping.dispatch');
	Route::get('/shipping/delivered/', 'Admin\ShippingController@shipDelivered')->name('admin.shipping.deliver');
	Route::get('/shipping/canceled/', 'Admin\ShippingController@shipCanceled')->name('admin.shipping.cancel');
	Route::get('/shipping/order/{id}', 'Admin\ShippingController@shipOrder')->name('admin.shipping.order');
	Route::post('/shipping/order/update', 'Admin\ShippingController@orderUpdate')->name('admin.order.update');
	Route::post('/shipping/mailer', 'Admin\ShippingController@mailerShipping')->name('admin.shipping.mail');
	Route::post('/shipping/tracking/update', 'Admin\ShippingController@trackingUpdate')->name('admin.shipping.tracking');
	Route::get('/shipping/delete/{id}', 'Admin\ShippingController@deleteShipping')->name('admin.shipping.delete');

	/*---- Packages ----------*/
	Route::get('/packages', 'Admin\PackageController@packages')->name('admin.packages');
	Route::get('/packages/inreview', 'Admin\PackageController@packagesInreview')->name('admin.packages.inreview');
	Route::get('/packages/customer-action', 'Admin\PackageController@packagesInAction')->name('admin.packages.inaction');
	Route::get('/packages/ready-to-ship', 'Admin\PackageController@packagesReady')->name('admin.packages.ready');
	Route::get('/package/add', 'Admin\PackageController@addPackage')->name('admin.package.add');
	Route::post('/package/submit', 'Admin\PackageController@submitPackage')->name('admin.package.submit');
	Route::get('/package/delete/{id}', 'Admin\PackageController@deletePackage')->name('admin.package.delete');
	Route::get('/package/id/{id}', 'Admin\PackageController@editPackage')->name('admin.package.edit');
	Route::post('/package/update', 'Admin\PackageController@updatePackage')->name('admin.package.update');
	Route::post('/package/mailer', 'Admin\PackageController@mailerPackage')->name('admin.package.mail');

	/*----- Pack Items -----*/
	Route::post('/add-item', 'Admin\PackageController@submitItem')->name('admin.item.submit');
	Route::get('/delete-item/id/{id}', 'Admin\PackageController@deleteItem')->name('admin.item.delete');
	/*------ Pack Photos ----*/
	Route::post('/package/photo', 'Admin\PackageController@submitPhoto')->name('admin.photo.submit');
	Route::get('/package/photo/delete/{id}', 'Admin\PackageController@deletePhoto')->name('admin.photo.delete');
	Route::post('/package/photo/request', 'Admin\PackageController@updatePhotoRequest')->name('admin.photo.request');
	/*------ Package Charges ------*/
	Route::post('/package/charges', 'Admin\PackageController@updatePackCharge')->name('admin.package.charges');

	/*------- Incoming Orders ------*/
	Route::get('/incoming-orders', 'Admin\AdminController@incomingOrders')->name('admin.incoming.orders');

	/*---- Customers ---------*/
	Route::get('/customers', 'Admin\AdminController@customers')->name('admin.customers');
	Route::get('/customer/add', 'Admin\AdminController@addCustomer')->name('admin.customer.add');
	Route::post('/customer/submit', 'Admin\AdminController@submitCustomer')->name('admin.customer.submit');
	Route::get('/customer/{id}', 'Admin\AdminController@editCustomer')->name('admin.customer.edit');
	Route::post('/customer/update', 'Admin\AdminController@updateCustomer')->name('admin.customer.update');
	Route::post('/customer/loyalty/misc', 'Admin\AdminController@submitMisc')->name('admin.customer.misc');
	Route::get('/customer/loyalty/misc/remove/{miscid}', 'Admin\AdminController@removeMisc')->name('admin.customer.misc.remove');
	Route::get('/customer/delete/{id}', 'Admin\AdminController@deleteCustomer')->name('admin.customer.delete');
	Route::get('/customer/acccess/{id}', 'Admin\AdminController@accessAccount')->name('admin.customer.access');

	/*---- Admin Login -------*/
	Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
	Route::get('/login', 'Admin\LoginController@showLogin')->name('admin.login');

	/*---- Admin ------*/
	Route::get('/logout', 'Admin\AdminController@logout')->name('admin.logout');
	Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
});

/*------ Packages ---------*/
Route::post('/package-invoice', 'Customer\PackageController@invoicePackage')->name('customer.invoice.upload');
Route::post('/confirm-package', 'Customer\PackageController@valueConfirm')->name('customer.values.confirm');
Route::post('/package/value/change', 'Customer\PackageController@changeValues')->name('customer.values.change');

/*-------- Photo Request ------*/
Route::post('/photos/standard/request', 'Customer\PackageController@requestStdPhotos')->name('customer.photos.standard.request');
Route::post('/photos/advanced/request', 'Customer\PackageController@requestAdvncPhotos')->name('customer.photos.advanced.request');

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
Route::get('/account-documents', 'Customer\ShippingController@accountDocs')->name('customer.account.docs');
Route::post('/account-documents', 'Customer\ShippingController@submitDocs')->name('customer.account.docs.submit');
Route::get('/account-doc-delete/id/{id}', 'Customer\ShippingController@deleteAccountDoc')->name('customer.account.docs.delete');

/*------- Payment Gateway ---------*/
// Show payment form
Route::get('/payment/add-funds/paypal', 'Customer\PaypalController@showForm');
// Post payment details for store/process API request
Route::post('/payment/add-funds/paypal', 'Customer\PaypalController@store')->name('payment.paypal.submit');
// Handle status
Route::get('/payment/add-funds/paypal/status', 'Customer\PaypalController@getPaymentStatus');

/*------- Ship Request ------------*/
Route::post('/shipping/request/calculation', 'Customer\ShippingController@ajaxCalculation')->name('shipping.packages.calc.ajax');

Route::post('/shipping/request/redirect', 'Customer\ShippingController@redirectShipment')->name('shipping.request.redirect');
Route::get('/shipping/request/create', 'Customer\ShippingController@createShipment')->name('shipping.request.create');
Route::post('/shipping/request/submit', 'Customer\ShippingController@submitShipment')->name('shipping.request.submit');
Route::get('/shipping/request/toreview', 'Customer\ShippingController@responseToReview')->name('shipping.request.toreview');
Route::get('/shipping/request/confirm/{orderid}', 'Customer\ShippingController@confirmShipment')->name('shipping.request.confirm');
Route::post('/shipping/request/finalship', 'Customer\ShippingController@finalShipRequest')->name('shipping.request.final');

Route::get('/shipping/request/response', 'Customer\ShippingController@responseShipment')->name('shipping.request.response');
Route::get('/shipping/queue', 'Customer\ShippingController@shipQueue')->name('shipping.queue');
Route::get('/shipping/history', 'Customer\ShippingController@shipHistory')->name('shipping.history');
Route::get('/shipment/invoice/{orderid}', 'Customer\ShippingController@shipmentInvoice')->name('shipping.invoice');
Route::get('/shipping/request/cancel/{orderid}', 'Customer\ShippingController@cancelRequest')->name('shipping.request.cancel');

/*-------- Reffer A Friend --------*/
Route::get('/refer-a-friend', 'Customer\ProfileController@refferAfriend')->name('customer.reffer.view');
Route::post('/reffer-submit', 'Customer\ProfileController@refferSubmit')->name('customer.reffer.submit');

/*-------- Loyalty Points ---------*/
Route::get('/loyalty-points', 'Customer\ProfileController@loyaltyPoints')->name('customer.loyalty.points');

/*-------- Favorite Stores ---------*/
Route::get('/favorite-stores', 'Customer\StoreController@favStores')->name('customer.stores.fav');
Route::post('/store/favorite/add', 'Customer\StoreController@addFavorite');
Route::post('/store/favorite/remove', 'Customer\StoreController@removeFavorite');
Route::post('/store/favorite/sort', 'Customer\StoreController@sortFavorite');


/*--------- Personal Shopper ---------*/
Route::get('/personal-shopper', 'Customer\ShopperController@personalShopper')->name('personal.shopper');
Route::get('/personal-shopper/order', 'Customer\ShopperController@orderForm')->name('personal.shopper.form');
Route::post('/personal-shopper/submit', 'Customer\ShopperController@submitForm')->name('personal.shopper.submit');
Route::get('/personal-shopper/cart', 'Customer\ShopperController@shopperCart')->name('personal.shopper.cart');
Route::get('/personal-shopper/order/edit/{reqid}', 'Customer\ShopperController@editOrder')->name('personal.shopper.edit');
Route::post('/personal-shopper/order/udpate', 'Customer\ShopperController@updateOrder')->name('personal.shopper.update');
Route::get('/personal-shopper/req/delete/{reqid}', 'Customer\ShopperController@deleteReq')->name('personal.shopper.deletereq');
Route::get('/personal-shopper/order/delete/{orderid}', 'Customer\ShopperController@deleteOrder')->name('personal.shopper.deleteorder');
Route::get('/personal-shopper/history', 'Customer\ShopperController@shopperHistory')->name('personal.shopper.history');
Route::get('/personal-shopper/options', 'Customer\ShopperController@shopperOptions')->name('personal.shopper.options');
Route::post('/personal-shopper/options/submit', 'Customer\ShopperController@submitOptions')->name('personal.shopper.options.submit');
Route::get('/personal-shopper/summary', 'Customer\ShopperController@shopperSummary')->name('personal.shopper.summary');
Route::get('/personal-shopper/payment', 'Customer\ShopperController@shopperPayment')->name('personal.shopper.payment');
Route::post('/personal-shopper/payment/submit', 'Customer\ShopperController@submitPayment')->name('personal.shopper.payment.submit');
Route::get('/personal-shopper/response', 'Customer\ShopperController@shopperResponse')->name('personal.shopper.response');
Route::get('/personal-shopper/invoice/{refnum}', 'Customer\ShopperController@orderInvoice')->name('personal.shopper.invoice');
Route::get('/personal-shopper/cancel/{refnum}', 'Customer\ShopperController@cancelShopper')->name('personal.shopper.cancel');

/*------ Password -------*/
Route::get('/forgot-password', 'Customer\PasswordController@forgotPassword')->name('customer.forgot');
Route::post('/forgot-password', 'Customer\PasswordController@submitForgot')->name('customer.forgot.submit');
Route::get('/reset-password/token/{token}/email/{email}', 'Customer\PasswordController@resetForgot')->name('customer.reset');
Route::post('/reset-password', 'Customer\PasswordController@resetPassword')->name('customer.reset.submit');
Route::post('/change-password', 'Customer\ProfileController@changePassword')->name('customer.change.submit');

/*------ Profile ----------*/
Route::get('/register', 'Customer\RegisterController@register')->name('customer.register');
Route::post('/register', 'Customer\RegisterController@submitRegister')->name('customer.register.submit');
Route::get('/email-verify/token/{token}/email/{email}', 'Customer\RegisterController@verifyEmail')->name('customer.verify');
Route::get('/login', 'Customer\LoginController@login')->name('customer.login');
Route::post('/login', 'Customer\LoginController@submitLogin')->name('customer.login.submit');
Route::get('/logout', 'Customer\ProfileController@logout')->name('customer.logout');
Route::post('/register/survey', 'Customer\ProfileController@registerSurvey')->name('customer.register.survey');

Route::get('/social/oauth/google', 'Customer\SocialAuthController@redirectGoogle')->name('customer.social.google');
Route::get('/social/callback/google', 'Customer\SocialAuthController@callbackGoogle');

Route::get('/social/oauth/facebook', 'Customer\SocialAuthController@redirectFacebook')->name('customer.social.facebook');
Route::get('/social/callback/facebook', 'Customer\SocialAuthController@callbackFacebook');

Route::get('/locker', 'Customer\ProfileController@viewProfile')->name('customer.locker');
Route::get('/settings', 'Customer\ProfileController@editProfile')->name('customer.settings');
Route::post('/edit', 'Customer\ProfileController@postProfile')->name('customer.edit.submit');
Route::get('/incoming-order', 'Customer\ProfileController@incomingOrder')->name('customer.incoming');
Route::post('/incoming-order', 'Customer\ProfileController@incomingOrderSubmit')->name('customer.incoming.submit');

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
Route::post('/qoute/submit', 'PageController@getQuote')->name('get.quote');
Route::get('/browse-categories', 'PageController@stores')->name('stores');
Route::post('/stores/sort', 'PageController@sortStores')->name('stores.sort');
Route::get('/reviews', 'PageController@reviews')->name('reviews');
Route::post('/reviews/submit', 'PageController@submitReview')->name('reviews.submit');

Route::get('/{slug}', 'PageController@viewPage')->name('page');
<?php


/*--------Myaccount routes------*/

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Route::get('/access/oauth', 'Myaccount\Admin\LoginController@loginWithShoppre')->name('shoppre.login');
Route::get('/generate/virtualCode', 'Myaccount\Admin\LoginController@generateVirtualCode')->name('shoppre.generateVirtualCode');

Route::prefix('admin')->group(function(){
    /*---- Admin Login -------*/
    Route::get('/login', 'Myaccount\Admin\LoginController@showLogin')->name('admin.login');
    Route::post('/login', 'Myaccount\Admin\LoginController@login')->name('admin.login.submit');

    /*---- Admin ------*/
//    Route::get('/', 'Myaccount\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/', 'Myaccount\Admin\AdminController@customers')->name('admin.dashboard');
    Route::get('/logout', 'Myaccount\Admin\AdminController@logout')->name('admin.logout');


    Route::get('/quick/migrate', 'Myaccount\Admin\AdminController@quickPackageMigrate')->name('admin.quick.migrate');
    Route::get('/get-package-count','Myaccount\Admin\AdminController@getPackageCount')->name('admin.package.count');

    /*------- Country Guides -------------*/
    Route::get('/country-guide', 'Myaccount\Admin\CguideController@cguideIndex')->name('admin.cguide.index');
    Route::get('/country/guide/{iso}', 'Myaccount\Admin\CguideController@cguideView')->name('admin.cguide.view');
    Route::post('/country/guide/update', 'Myaccount\Admin\CguideController@updateGuide')->name('admin.cguide.update');
    Route::post('/country/guide/update/country', 'Myaccount\Admin\CguideController@updateCountry')
        ->name('admin.cguide.update_count');

    /*------- Reports --------*/

    Route::get('/reports', 'Myaccount\Admin\ReportController@reports')->name('admin.reports');

    /*-------- Shoppre Stories ---------*/
    Route::get('/stories', 'Myaccount\Admin\StoryController@index')->name('admin.story.index');
    Route::get('/stories/new', 'Myaccount\Admin\StoryController@create')->name('story.create');
    Route::post('/stories/new', 'Myaccount\Admin\StoryController@submit')->name('story.submit');
    Route::get('/stories/update', 'Myaccount\Admin\StoryController@update')->name('story.update');
    Route::post('/stories/update', 'Myaccount\Admin\StoryController@updateSubmit')->name('story.update.submit');
    Route::post('/stories/delete', 'Myaccount\Admin\StoryController@delete')->name('story.delete');

    /*------- Wallet Transactions --------*/
    Route::post('/wallet/transactions/add', 'Myaccount\Admin\AdminController@addTransaction')->name('admin.transactions.add');
    Route::get('/wallet/transactions/remove/{id}', 'Myaccount\Admin\AdminController@removeTransaction')->name('admin.transactions.remove');
    Route::post('/wallet/transactions/update', 'Myaccount\Admin\AdminController@updateTransaction')->name('admin.transactions.update');

    Route::get('/wallet', 'Nodeapi\NodeController@walletShow')->name('admin.walletShow');
    Route::get('/walletUpdate', 'Nodeapi\NodeController@walletUpdate')->name('admin.walletUpdate');
    Route::get('/wallet/index', 'Nodeapi\NodeController@walletIndex')->name('admin.walletIndex');
    Route::get('/loyalty', 'Nodeapi\NodeController@loyaltyShow')->name('admin.loyaltyShow');
    Route::get('/loyaltyUpdate', 'Nodeapi\NodeController@loyaltyUpdate')->name('admin.loyaltyUpdate');
    Route::get('/loyaltyCreate', 'Nodeapi\NodeController@loyaltyCreate')->name('admin.loyaltyCreate');
    Route::get('/user/verify/email', 'Nodeapi\NodeController@sendEmailVerification')->name('user.emailVerification');

    /*------- Scheduled Mails ------------*/
    Route::get('/scheduled/mails', 'Myaccount\Admin\AdminController@scheduledMails')->name('admin.scheduled.mails');

    /*-------- Admin Notifications -----------*/
    Route::get('/notifications/customer', 'Myaccount\Admin\NotificationController@customerNotify')->name('admin.notify.customer');
    Route::get('/notifications/incoming', 'Myaccount\Admin\NotificationController@incomingNotify')->name('admin.notify.incoming');
    Route::get('/notifications/package', 'Myaccount\Admin\NotificationController@packageNotify')->name('admin.notify.package');
    Route::get('/notifications/shipment', 'Myaccount\Admin\NotificationController@shipmentNotify')->name('admin.notify.shipment');
    Route::get('/notifications/psshoppre', 'Myaccount\Admin\NotificationController@psshoppreNotify')->name('admin.notify.psshoppre');
    Route::get('/notifications/pscustomer', 'Myaccount\Admin\NotificationController@psselfNotify')->name('admin.notify.psself');
    Route::get('/notifications/status/{notification_id}', 'Myaccount\Admin\NotificationController@statusChange')->name('admin.notify.status');

    /*------- Self - Personal Shopper --------*/
    Route::get('/shopper/self/orders', 'Myaccount\Admin\ShopperController@selfOrders')->name('admin.shopper.self.orders');
    Route::get('/shopper/self/order/{order_id}', 'Myaccount\Admin\ShopperController@viewSelfOrder')->name('admin.shopper.self.order');
    Route::post('/shopper/self/orders/update', 'Myaccount\Admin\ShopperController@updateSelfOrder')->name('admin.shopper.self.update');
    Route::post('/shopper/self/order/item/update', 'Myaccount\Admin\ShopperController@updateSelfItem')->name('admin.self.item.update');

    /*------- Personal Shopper ------------*/
    Route::get('/shopper/orders', 'Myaccount\Admin\ShopperController@orders')->name('admin.shopper.orders');
    Route::get('/shopper/orders/awaiting', 'Myaccount\Admin\ShopperController@awaitingOrders')->name('admin.shopper.awaiting');
    Route::get('/shopper/orders/received', 'Myaccount\Admin\ShopperController@receivedOrders')->name('admin.shopper.received');
    Route::get('/shopper/orders/processed', 'Myaccount\Admin\ShopperController@processedOrders')->name('admin.shopper.processed');
    Route::get('/shopper/orders/canceled', 'Myaccount\Admin\ShopperController@canceledOrders')->name('admin.shopper.canceled');
    Route::get('/shopper/orders/completed', 'Myaccount\Admin\ShopperController@completedOrders')->name('admin.shopper.completed');

    Route::get('/shopper/orders/{order_id}', 'Myaccount\Admin\ShopperController@viewOrder')->name('admin.shopper.order');
    Route::post('/shopper/orders/update', 'Myaccount\Admin\ShopperController@updateOrder')->name('admin.shopper.update');
    Route::get('/shopper/orders/unread/{order_id}', 'Myaccount\Admin\ShopperController@markUnread')->name('admin.shopper.unread');
    Route::post('/shopper/order/item/update', 'Myaccount\Admin\ShopperController@updateOrderItem')->name('admin.psorder.item.update');

    /*------- Reviews ------------*/
    Route::get('/reviews', 'Myaccount\Admin\ReviewController@reviews')->name('admin.reviews');
    Route::post('/reviews/submit', 'Myaccount\Admin\ReviewController@submitReview')->name('admin.reviews.submit');
    Route::post('/reviews/update', 'Myaccount\Admin\ReviewController@updateReview')->name('admin.reviews.update');
    Route::post('/reviews/delete/{id}', 'Myaccount\Admin\ReviewController@deleteReview')->name('admin.reviews.delete');

    /*------- PromoCodes --------*/
    Route::get('/promos', 'Myaccount\Admin\PromoController@promos')->name('admin.promos');
    Route::post('/promos/submit', 'Myaccount\Admin\PromoController@submitCode')->name('admin.promos.submit');
    Route::post('/promos/update', 'Myaccount\Admin\PromoController@updateCode')->name('admin.promos.update');


    /*------- PAGE --------*/
    Route::get('/pages', 'Myaccount\Admin\PageController@pages')->name('admin.pages');
    Route::get('/pages/add', 'Myaccount\Admin\PageController@addPage')->name('admin.pages.add');
    Route::post('/pages/submit', 'Myaccount\Admin\PageController@submitPage')->name('admin.pages.submit');
    Route::get('/pages/edit/{id}', 'Myaccount\Admin\PageController@editPage')->name('admin.pages.edit');
    Route::post('/pages/update', 'Myaccount\Admin\PageController@updatePage')->name('admin.pages.update');

    /*------- FAQ ---------*/
    Route::get('/faq/categories', 'Myaccount\Admin\FaqController@faqCats')->name('admin.faq.category');
    Route::post('/faq/category/submit', 'Myaccount\Admin\FaqController@submitCategory')->name('admin.faq.category.submit');
    Route::post('/faq/category/update', 'Myaccount\Admin\FaqController@updateCategory')->name('admin.faq.category.update');
    Route::get('/faq/category/{id}', 'Myaccount\Admin\FaqController@viewCategory')->name('admin.faq.category.view');
    Route::post('/faq/submit', 'Myaccount\Admin\FaqController@submitFaq')->name('admin.faq.submit');
    Route::post('/faq/update', 'Myaccount\Admin\FaqController@updateFaq')->name('admin.faq.update');
    Route::get('/faq/delete/{id}', 'Myaccount\Admin\FaqController@deleteFaq')->name('admin.faq.delete');

    /*------- flashsale ---------*/
    Route::get('/flash-sale/create-sale', 'Myaccount\FlashSaleController@create')->name('flash-sale.create-sale');
    Route::post('/flash-sale/submit', 'Myaccount\FlashSaleController@submit')->name('flash-sale.submit');

    /*------- Stores ---------*/
    Route::get('/stores/', 'Myaccount\Admin\StoreController@index')->name('admin.stores');
    Route::post('/stores/submit', 'Myaccount\Admin\StoreController@submitStore')->name('admin.stores.submit');
    Route::post('/stores/update', 'Myaccount\Admin\StoreController@updateStore')->name('admin.stores.update');
    /*Route::get('/stores/delete/id/{id}', 'Myaccount\Admin\StoreController@deleteStore')->name('admin.stores.delete');*/

    Route::get('/stores/categories/', 'Myaccount\Admin\StoreController@categories')->name('admin.categories');
    Route::post('/stores/categories/add', 'Myaccount\Admin\StoreController@addCategory')->name('admin.categories.add');
    Route::get('/stores/search', 'Myaccount\Admin\AdminController@searchStore')->name('admin.stores.search');
    Route::post('/stores/categories/update', 'Myaccount\Admin\StoreController@updateCategory')->name('admin.categories.update');
    /*Route::get('/stores/categories/delete/{id}', 'Myaccount\Admin\StoreController@deleteCategory')->name('admin.categories.delete');*/
    Route::get('/stores/category/{id}', 'Myaccount\Admin\StoreController@storesCategory')->name('admin.category.stores');
    Route::post('/stores/category/submit', 'Myaccount\Admin\StoreController@submitStoreCat')->name('admin.category.store.submit');
    Route::post('/stores/category/update', 'Myaccount\Admin\StoreController@updateStoreCat')->name('admin.category.store.update');
    Route::get('/stores/category/delete/{id}', 'Myaccount\Admin\StoreController@deleteStoreCat')->name('admin.category.store.delete');
    /*---- Shipping Country --------*/
    Route::get('/shipping/countries/', 'Myaccount\Admin\ShippingController@countries')->name('admin.country.list');
    Route::post('/shipping/country/', 'Myaccount\Admin\ShippingController@updateCountry')->name('admin.country.update');
    /*Route::post('/shipping/country/delete/{id}', 'Myaccount\Admin\ShippingController@deleteCountry')->name('admin.country.delete');*/

    /*---- Shipping Charges --------*/
    Route::get('/shippingrate/charges/', 'Myaccount\Admin\ShippingController@charges')->name('admin.shippingrates');
    Route::get('/shippingrate/{country}', 'Myaccount\Admin\ShippingController@shipCharge')->name('admin.shippingrate');
    Route::post('/shippingrate/submit', 'Myaccount\Admin\ShippingController@shippingRate')->name('admin.shippingrate.submit');
    Route::get('/shippingrate/delete/{rate}', 'Myaccount\Admin\ShippingController@deleteRate')->name('admin.shippingrate.delete');
    Route::post('/shippingrate/update', 'Myaccount\Admin\ShippingController@updateRate')->name('admin.shippingrate.update');

    /*------ Shipments ---------*/
    Route::get('/shipments', 'Myaccount\Admin\ShippingController@shipments')->name('admin.shipping');
    Route::get('/shipping/inqueue/', 'Myaccount\Admin\ShippingController@shipQueue')->name('admin.shipping.queue');
    Route::get('/shipping/inreview/', 'Myaccount\Admin\ShippingController@shipReview')->name('admin.shipping.review');
    Route::get('/shipping/dispatched/', 'Myaccount\Admin\ShippingController@shipDispatched')->name('admin.shipping.dispatch');
    Route::get('/shipping/delivered/', 'Myaccount\Admin\ShippingController@shipDelivered')->name('admin.shipping.deliver');
    Route::get('/shipping/canceled/', 'Myaccount\Admin\ShippingController@shipCanceled')->name('admin.shipping.cancel');
    Route::get('/shipping/order/{id}', 'Myaccount\Admin\ShippingController@shipOrder')->name('admin.shipping.order');
    Route::get('/shipping/order/unread/{ship_request_id}', 'Myaccount\Admin\ShippingController@markUnread')->name('admin.shipping.unread');
    Route::post('/shipping/order/update', 'Myaccount\Admin\ShippingController@orderUpdate')->name('admin.order.update');
    Route::post('/shipping/tracking/update', 'Myaccount\Admin\ShippingController@trackingUpdate')->name('admin.shipping.tracking');
    Route::get('/shipping/delete/{id}', 'Myaccount\Admin\ShippingController@deleteShipping')->name('admin.shipping.delete');
    Route::get('/shipping/invoice/{order_id}', 'Myaccount\Admin\ShippingController@shipmentInvoice')->name('admin.shipping.invoice');
    Route::post('/shipping/options/update', 'Myaccount\Admin\ShippingController@optionsUpdate')->name('admin.shipping.options.update');

    /*---- Packages ----------*/
    Route::get('/packages', 'Myaccount\Admin\PackageController@packages')->name('admin.packages');
    Route::get('/packages/inreview', 'Myaccount\Admin\PackageController@packagesInreview')->name('admin.packages.inreview');
    Route::get('/packages/customer-action', 'Myaccount\Admin\PackageController@packagesInAction')->name('admin.packages.inaction');
    Route::get('/packages/ready-to-ship', 'Myaccount\Admin\PackageController@packagesReady')->name('admin.packages.ready');
    Route::get('/package/add', 'Myaccount\Admin\PackageController@addPackage')->name('admin.package.add');
    Route::post('/package/submit', 'Myaccount\Admin\PackageController@submitPackage')->name('admin.package.submit');
    Route::get('/package/delete/{id}', 'Myaccount\Admin\PackageController@deletePackage')->name('admin.package.delete');
    Route::post('/package/delete/package', 'Myaccount\Admin\PackageController@deletePackage')->name('admin.delete.package');
    Route::get('/packages/{id}', 'Myaccount\Admin\PackageController@edit')->name('admin.package.edit');
    Route::get('/package/unread/{package_id}', 'Myaccount\Admin\PackageController@markUnread')->name('admin.package.unread');
    Route::post('/package/update', 'Myaccount\Admin\PackageController@updatePackage')->name('admin.package.update');
    Route::post('/package/mailer', 'Myaccount\Admin\PackageController@mailerPackage')->name('admin.package.mail');

    /*----- Pack Items -----*/
    Route::post('/packages/{package_id}/items', 'Myaccount\Admin\PackageItemController@create')->name('admin.package-items.create');
    Route::post('/get-item', 'Myaccount\Admin\PackageController@getItemDetail')->name('admin.item.get');
    Route::post('/update-item', 'Myaccount\Admin\PackageController@submitUpdateItem')->name('admin.item.update.submit');
    Route::get('/delete-item/id/{id}', 'Myaccount\Admin\PackageController@deleteItem')->name('admin.item.delete');
    Route::post('/add-category', 'Myaccount\Admin\PackageController@submitCategory')->name('admin.category.submit');

    /*------ Pack Photos ----*/
    Route::post('/package/photo', 'Myaccount\Admin\PackageController@submitPhoto')->name('admin.photo.submit');
    Route::get('/package/photo/delete/{id}', 'Myaccount\Admin\PackageController@deletePhoto')->name('admin.photo.delete');
    Route::post('/package/photo/request', 'Myaccount\Admin\PackageController@updatePhotoRequest')->name('admin.photo.request');

    /*------ Scan Docs ------*/
    Route::post('/package/scan/doc', 'Myaccount\Admin\PackageController@submitScandoc')->name('admin.scan.doc.submit');
    Route::get('/package/scan/doc/delete/{id}', 'Myaccount\Admin\PackageController@deleteScandoc')->name('admin.scan.doc.delete');
    Route::post('/package/scan/doc/request', 'Myaccount\Admin\PackageController@updateScanRequest')->name('admin.scan.doc.request');

    /*------ Package Charges ------*/
    Route::post('/package/charges', 'Myaccount\Admin\PackageController@updatePackCharge')->name('admin.package.charges');

    /*------- Incoming Orders ------*/
    Route::get('/incoming-orders', 'Myaccount\Admin\AdminController@incomingOrders')->name('admin.incoming.orders');
    Route::post('/incoming-orders/update', 'Myaccount\Admin\AdminController@incomingUpdate')->name('admin.incoming.update');

    /*---- Customers ---------*/
    Route::post('/dashboard/package/submit', 'Myaccount\Admin\AdminController@packageSubmit')
        ->name('admin.dashboard.package.submit');

    /*---- Customers ---------*/
    Route::get('/customers', 'Myaccount\Admin\AdminController@customers')->name('admin.customers');
    Route::get('/customer/add', 'Myaccount\Admin\AdminController@addCustomer')->name('admin.customer.add');
    Route::post('/customer/submit', 'Myaccount\Admin\AdminController@submitCustomer')->name('admin.customer.submit');
    Route::get('/customers/search', 'Myaccount\Admin\AdminController@searchCustomers')->name('admin.customers.search');
    Route::get('/customer/{id}', 'Myaccount\Admin\AdminController@editCustomer')->name('admin.customer.edit');
    Route::post('/customer/update', 'Myaccount\Admin\AdminController@updateCustomer')->name('admin.customer.update');
    Route::get('/customer/unread/{customer_id}', 'Myaccount\Admin\AdminController@markUnread')->name('admin.customer.unread');
    Route::get('/customer/delete/{id}', 'Myaccount\Admin\AdminController@deleteCustomer')->name('admin.customer.delete');
    Route::get('/customer/acccess/{id}', 'Myaccount\Admin\AdminController@accessAccount')->name('admin.customer.access');

    /*------- Loyalty Points ------------*/
    Route::post('/customer/loyalty/misc', 'Myaccount\Admin\AdminController@submitMisc')->name('admin.customer.misc');
    Route::get('/customer/loyalty/misc/remove/{miscid}', 'Myaccount\Admin\AdminController@removeMisc')
        ->name('admin.customer.misc.remove');
    Route::post('/customer/loyalty/misc/update', 'Myaccount\Admin\AdminController@updateMisc')->name('admin.loyalty.update');

    /*---- Schedule pickup -------*/
    Route::get('/pickup/list', 'Myaccount\SchedulePickupController@pickupList')->name('schedulePickup.list');
    Route::get('/pickup/{id}', 'Myaccount\SchedulePickupController@pickupView')->name('schedulePickup.View');
    Route::get('/pickup/shipment/{id}', 'Myaccount\SchedulePickupController@pickupViewDetail')->name('pickup-detail');
    Route::post('/pickup/update', 'Myaccount\SchedulePickupController@pickupUpdateSubmit')
        ->name('schedulePickup.update.submit');
    Route::post('/schedule-pickup/asana-tracking', 'Myaccount\SchedulePickupController@asanaTracking')
        ->name('schedulePickup.asana.tracking');
});


Route::get('/shop-from-india-ship-worldwide', 'PageController@ifsIndex')->name('ifs.index');

/* ---------- Get drop-off locations ---------*/
Route::get('/drop-off', 'PageController@dropOffLocations')->name('pickup.dropOff.location');

/* ---------- Android app url ---------*/
Route::get('/android', 'PageController@androidApp')->name('android.app.index');

Route::post('/mailchimp/subscribe', 'Myaccount\Customer\ProfileController@createSubscriber')->name('mailchimp.subscribe');
//Route::get('mailchimp/subscribe', 'Myaccount\Customer\ProfileController@createSubscriber')->name('mailchimp.subscribe');

/*------ Promocode Apply ---------*/

Route::post('/promos/applied', 'Myaccount\Customer\ApplyPromoController@applyCode')->name('customer.promos.apply');
Route::post('retry-payment/promos/applied', 'Myaccount\Customer\ApplyPromoController@applyCodeRetryPayment')
    ->name('customer.paymentRetry.promos.apply');

/*------ Direct Payment ---------*/

Route::get('direct/payment', 'DirectPaymentController@paymentView')->name('page.payment');
Route::post('direct/payment/submit', 'DirectPaymentController@paymentSubmit')->name('page.submit');
Route::get('direct/payment/success', 'DirectPaymentController@paymentSuccess')->name('page.success');

Route::get('/check-email/confirm', 'PageController@checkEmail')->name('admin.shipping.checkEmail');

/*------ Shoppre Wallet ---------*/
Route::get('/shoppre-wallet/transactions', 'Myaccount\Customer\ProfileController@shoppreWallet')->name('customer.wallet.trans');

/*------ Packages ---------*/
Route::post('/package-invoice', 'Myaccount\Customer\PackageController@invoicePackage')->name('customer.invoice.upload');
Route::post('/confirm-package', 'Myaccount\Customer\PackageController@valueConfirm')->name('customer.values.confirm');
Route::post('/package/value/change', 'Myaccount\Customer\PackageController@changeValues')->name('customer.values.change');
Route::post('/customer/pickup/request', 'Myaccount\Customer\PackageController@requestPickup')->name('customer.pickup.request');
Route::post('/package/return/request', 'Myaccount\Customer\PackageController@returnSender')->name('customer.return.request');
Route::post('/package/split/request', 'Myaccount\Customer\PackageController@splitPackage')->name('customer.split.request');
Route::post('/package/abandon/request', 'Myaccount\Customer\PackageController@abandonPackage')->name('customer.abandon.request');
Route::post('/package/add/note', 'Myaccount\Customer\PackageController@addNote')->name('customer.package.note');

/*-------- Photo & Scan Request ------*/
Route::post('/photos/standard/request', 'Myaccount\Customer\PackageController@requestStdPhotos')->name('customer.photos.standard.request');
Route::post('/photos/advanced/request', 'Myaccount\Customer\PackageController@requestAdvncPhotos')->name('customer.photos.advanced.request');
Route::post('/scan/docs/request', 'Myaccount\Customer\PackageController@requestScan')->name('customer.scan.request');



/*------ Address Book ------*/
Route::get('/address', 'Myaccount\Customer\AddressController@index')->name('customer.address');
Route::get('/add-address', 'Myaccount\Customer\AddressController@addAddress')->name('customer.address.add');
Route::post('/add-address', 'Myaccount\Customer\AddressController@submitAddress')->name('customer.address.submit');
Route::get('/address/{id}', 'Myaccount\Customer\AddressController@show')->name('customer.address.update.ajax');
Route::get('/update-address', 'Myaccount\Customer\AddressController@show')->name('customer.address.update.ajax');
Route::get('/edit-address/{id}', 'Myaccount\Customer\AddressController@editAddress')->name('customer.address.edit');
Route::post('/update-address', 'Myaccount\Customer\AddressController@update')->name('customer.address.update');
Route::get('/delete-address/{id}', 'Myaccount\Customer\AddressController@deleteAddress')->name('customer.address.delete');
Route::get('/address/default/{id}', 'Myaccount\Customer\AddressController@makeDefault')->name('customer.address.default');

/*------ Shipping Preference -------*/
Route::get('/shipping-preferences', 'Myaccount\Customer\ShippingController@getPreference')->name('customer.ship.prefer');
Route::post('/shipping-preferences', 'Myaccount\Customer\ShippingController@updatePreference')->name('customer.ship.prefer.update');
Route::get('/account-documents', 'Myaccount\Customer\ShippingController@accountDocs')->name('customer.account.docs');
Route::post('/account-documents', 'Myaccount\Customer\ShippingController@submitDocs')->name('customer.account.docs.submit');
Route::get('/account-doc-delete/id/{id}', 'Myaccount\Customer\ShippingController@deleteAccountDoc')->name('customer.account.docs.delete');

/*------- Paypal Payment Gateway ---------*/
Route::get('/shipping/payment/paypal', 'Myaccount\Customer\PaypalController@initiatePayment')->name('payment.paypal.start');
Route::get('/shipping/payment/paypal/status', 'Myaccount\Customer\PaypalController@responsePayment')->name('payment.paypal.status');

Route::get('/shopper/payment/paypal/initiate', 'Myaccount\Customer\PaypalController@shopperPaymentInitiate')->name('shopper.payment.paypal.start');
Route::get('/shopper/payment/paypal/status', 'Myaccount\Customer\PaypalController@shopperResponsePayment')->name('shopper.payment.paypal.status');

Route::get('/shopper/self/order/payment/paypal/initiate', 'Myaccount\Customer\PaypalController@selfPaymentStart')->name('shopper.self.paypal.start');
Route::get('/shopper/self/order/payment/paypal/status', 'Myaccount\Customer\PaypalController@selfPaymentStatus')->name('shopper.self.paypal.status');

Route::get('/locker/generate/payment/paypal/initiate', 'Myaccount\Customer\PaypalController@lockerGeneratePaymentInitiate')->name('locker.generate.payment.paypal.start');
Route::get('/locker/generate/payment/paypal/status', 'Myaccount\Customer\PaypalController@lockerGenerateResponsePayment')->name('locker.generate.payment.paypal.status');

/*------- PayTm Payment Gateway -------*/
//Route::get('/payment/paytm', 'Myaccount\Customer\PaytmController@testForm')->name('payment.paytm.form');
Route::get('/shipping/payment/paytm/initiate', 'Myaccount\Customer\PaytmController@initiatePayment')->name('payment.paytm.start');
Route::post('/shipping/payment/paytm/status', 'Myaccount\Customer\PaytmController@responsePayment')->name('payment.paytm.status');

Route::get('/shopper/payment/paytm/initiate', 'Myaccount\Customer\PaytmController@shopperPaymentInitiate')->name('shopper.payment.paytm.start');
Route::post('/shopper/payment/paytm/status', 'Myaccount\Customer\PaytmController@shopperResponsePayment')->name('shopper.payment.paytm.status');

Route::get('/shopper/self/order/payment/paytm/initiate', 'Myaccount\Customer\PaytmController@selfPaymentStart')->name('shopper.self.paytm.start');
Route::post('/shopper/self/order/payment/paytm/status', 'Myaccount\Customer\PaytmController@selfPaymentStatus')->name('shopper.self.paytm.status');

Route::get('/locker/generate/payment/paytm/initiate', 'Myaccount\Customer\PaytmController@lockerGeneartePaymentInitiate')->name('locker.generate.payment.paytm.start');
Route::post('/locker/generate/payment/paytm/status', 'Myaccount\Customer\PaytmController@lockerGenearteResponsePayment')->name('locker.generate.payment.paytm.status');


/*------- Axis ISG Payment --------*/
//Route::get('/payment/axis', 'Myaccount\Customer\AxisController@testForm')->name('payment.axis.form');
Route::get('/shipping/payment/axis/initiate', 'Myaccount\Customer\AxisController@initiatePayment')->name('payment.axis.start');
Route::post('/shipping/payment/axis/status', 'Myaccount\Customer\AxisController@responsePayment')->name('payment.axis.status');

Route::get('/shopper/payment/axis/initiate', 'Myaccount\Customer\AxisController@shopperPaymentInitiate')->name('shopper.payment.axis.start');
Route::post('/shopper/payment/axis/status', 'Myaccount\Customer\AxisController@shopperResponsePayment')->name('shopper.payment.axis.status');

Route::get('/shopper/self/order/payment/axis/initiate', 'Myaccount\Customer\AxisController@selfPaymentStart')->name('shopper.self.axis.start');
Route::post('/shopper/self/order/payment/axis/status', 'Myaccount\Customer\AxisController@selfPaymentStatus')->name('shopper.self.axis.status');

Route::get('/locker/generate/payment/axis/initiate', 'Myaccount\Customer\AxisController@lockerGeneratePaymentInitiate')->name('locker.generate.payment.axis.start');
Route::post('/locker/generate/shopper/payment/axis/status', 'Myaccount\Customer\AxisController@lockerGenerateResponsePayment')->name('locker.generate.payment.axis.status');

Route::get('/direct/payment/axis/initiate', 'Myaccount\Customer\AxisController@directPaymentInitiate')->name('direct.payment.axis.start');
Route::post('/direct/payment/axis/status', 'Myaccount\Customer\AxisController@directResponsePayment')->name('direct.payment.axis.status');

/*------- Ship Request ------------*/
Route::post('/shipping/request/calculation', 'Myaccount\Customer\ShippingController@ajaxCalculation')->name('shipping.packages.calc.ajax');

Route::post('/shipping/request/redirect', 'Myaccount\Customer\ShippingController@redirectShipment')->name('shipping.request.redirect');
Route::get('/shipping/request/create', 'Myaccount\Customer\ShippingController@createShipment')->name('shipping.request.create');
Route::post('/shipping/request/submit', 'Myaccount\Customer\ShippingController@submitShipment')->name('shipping.request.submit');
Route::get('/shipping/request/toreview', 'Myaccount\Customer\ShippingController@responseToReview')->name('shipping.request.toreview');
Route::get('/shipping/request/confirm/{order_id}', 'Myaccount\Customer\ShippingController@confirmShipment')->name('shipping.request.confirm');
Route::post('/shipping/request/finalship', 'Myaccount\Customer\ShippingController@finalShipRequest')->name('shipping.request.final');
Route::get('/shipping/request/payment/retry/{order_id}', 'Myaccount\Customer\ShippingController@retryPayment')->name('shipping.request.payment.retry');
Route::post('/shipping/request/payment/retry/submit', 'Myaccount\Customer\ShippingController@payretrySubmit')->name('shipping.payment.retry.submit');

Route::get('/shipping/request/response', 'Myaccount\Customer\ShippingController@responseShipment')->name('shipping.request.response');
Route::get('/shipping/queue', 'Myaccount\Customer\ShippingController@shipQueue')->name('shipping.queue');
Route::get('/shipping/history', 'Myaccount\Customer\ShippingController@shipHistory')->name('shipping.history');
Route::get('/shipment/invoice/{order_id}', 'Myaccount\Customer\ShippingController@shipmentInvoice')->name('shipping.invoice');
Route::get('/shipping/request/cancel/{order_id}', 'Myaccount\Customer\ShippingController@cancelRequest')->name('shipping.request.cancel');

/*-------- Reffer A Friend --------*/
Route::get('/refer-a-friend', 'Myaccount\Customer\ProfileController@refferAfriend')->name('customer.reffer.view');
Route::get('/refer-friend', 'Nodeapi\NodeController@refferAfriend')->name('node.reffer.view');
Route::get('/refer-a-friends', 'Nodeapi\NodeController@redirectReferFriend')->name('node.reffer.send');
Route::post('/reffer-submit', 'Myaccount\Customer\ProfileController@refferSubmit')->name('customer.reffer.submit');

/*-------- Loyalty Points ---------*/
Route::get('/loyalty-points', 'Myaccount\Customer\ProfileController@loyaltyPoints')->name('customer.loyalty.points');
Route::get('/welcome-email', 'Myaccount\Customer\ProfileController@welcomeEmail')->name('welcome-email');

/*-------- Favorite Stores ---------*/
Route::get('/favorite-stores', 'Myaccount\Customer\StoreController@favStores')->name('customer.stores.fav');
Route::post('/store/favorite/add', 'Myaccount\Customer\StoreController@addFavorite');
Route::post('/store/favorite/remove', 'Myaccount\Customer\StoreController@removeFavorite');
Route::post('/store/favorite/sort', 'Myaccount\Customer\StoreController@sortFavorite');

/*------- Proforma Invoice --------*/
Route::post('/shipment/proforma-invoice', 'ProformaInvoiceController@getInvoiceDetail')
    ->name('admin.proforma-invoice');


/*--------- Personal Shopper ---------*/
Route::get('/personal-shopper', 'Myaccount\Customer\ShopperController@personalShopper')->name('personal.shopper');
Route::get('/personal-shopper/order', 'Myaccount\Customer\ShopperController@orderForm')->name('personal.shopper.form');
Route::post('/personal-shopper/submit', 'Myaccount\Customer\ShopperController@submitForm')->name('personal.shopper.submit');
Route::get('/personal-shopper/cart', 'Myaccount\Customer\ShopperController@shopperCart')->name('personal.shopper.cart');
Route::get('/personal-shopper/order/edit/{reqid}', 'Myaccount\Customer\ShopperController@editOrder')->name('personal.shopper.edit');
Route::post('/personal-shopper/order/udpate', 'Myaccount\Customer\ShopperController@updateOrder')->name('personal.shopper.update');
Route::get('/personal-shopper/req/delete/{reqid}', 'Myaccount\Customer\ShopperController@deleteReq')->name('personal.shopper.deletereq');
Route::get('/personal-shopper/order/delete/{order_id}', 'Myaccount\Customer\ShopperController@deleteOrder')->name('personal.shopper.deleteorder');

Route::get('/personal-shopper/history', 'Myaccount\Customer\ShopperController@shopperHistory')->name('personal.shopper.history');
Route::get('/personal-shopper/options', 'Myaccount\Customer\ShopperController@shopperOptions')->name('personal.shopper.options');

Route::post('/personal-shopper/options/submit', 'Myaccount\Customer\ShopperController@submitOptions')->name('personal.shopper.options.submit');
Route::post('/personal-shopper/asana-tracking-order', 'Customer\ShopperController@asanaTrackingOrder')->name('personal.shopper.asana.tracking');
Route::get('/personal-shopper/summary', 'Myaccount\Customer\ShopperController@shopperSummary')->name('personal.shopper.summary');
Route::get('/personal-shopper/payment', 'Myaccount\Customer\ShopperController@shopperPayment')->name('personal.shopper.payment');
Route::post('/personal-shopper/payment/submit', 'Myaccount\Customer\ShopperController@submitPayment')->name('personal.shopper.payment.submit');
Route::get('/personal-shopper/response', 'Myaccount\Customer\ShopperController@shopperResponse')->name('personal.shopper.response');
Route::get('/personal-shopper/invoice/{reference_number}', 'Myaccount\Customer\ShopperController@orderInvoice')->name('personal.shopper.invoice');
Route::get('/personal-shopper/cancel/{reference_number}', 'Myaccount\Customer\ShopperController@cancelShopper')->name('personal.shopper.cancel');
Route::get('/personal-shopper/order/redirect/payment/{reference_number}', 'Myaccount\Customer\ShopperController@orderPayChange')->name('personal.shopper.paychange');
Route::get('/shopper/migrate', 'Myaccount\Customer\ShopperController@MigrateToParcel')->name('shopper.migrate');

/*--------- Personal Self Shopper -------------*/
Route::post('/personal-shopper/self/order/submit', 'Myaccount\Customer\ShopperController@selfOrderSubmit')->name('shopper.self.submit');
Route::post('/personal-shopper-self/asana-tracking-self-order', 'Customer\ShopperController@asanaTrackingSelfOrder')->name('self.shopper.asana.tracking');
Route::get('/personal-shopper/self/order/payment', 'Myaccount\Customer\ShopperController@selfOrderPayment')->name('shopper.self.pay');
Route::get('/personal-shopper/self/order/redirect/payment/{reference_number}', 'Myaccount\Customer\ShopperController@selfOrderPayRedirect')->name('shopper.self.redirect.pay');
Route::post('/personal-shopper/self/order/payment/submit', 'Myaccount\Customer\ShopperController@selfOrderPaySubmit')->name('shopper.self.pay.submit');
Route::get('/personal-shopper/self/order/history', 'Myaccount\Customer\ShopperController@selfOrderHistory')->name('shopper.self.history');
Route::get('/personal-shopper/self/order/response', 'Myaccount\Customer\ShopperController@selfOrderResponse')->name('shopper.self.response');
Route::get('/personal-shopper/self/order/invoice/{reference_number}', 'Myaccount\Customer\ShopperController@selfOrderInvoice')->name('shopper.self.invoice');
Route::get('/personal-shopper/self/order/cancel/{reference_number}', 'Myaccount\Customer\ShopperController@cancelSelfShopper')->name('shopper.self.cancel');
Route::get('/personal-shopper/terms-and-conditions', 'Myaccount\Customer\ShopperController@termsConditions')->name('personal.termsConditions');

/*------ Password -------*/
Route::get('/forgot-password', 'Myaccount\Customer\PasswordController@forgotPassword')->name('customer.forgot');
Route::post('/forgot-password', 'Myaccount\Customer\PasswordController@submitForgot')->name('customer.forgot.submit');
Route::get('/reset-password/token/{token}/email/{email}', 'Myaccount\Customer\PasswordController@resetForgot')->name('customer.reset');
Route::post('/reset-password/submit', 'Myaccount\Customer\PasswordController@resetPassword')->name('customer.reset.submit');

/*------ Profile ----------*/
Route::get('/member/success', 'Myaccount\Customer\PackageController@memberSuccess')->name('member.success');
Route::get('/member/select/plan', 'Myaccount\Customer\MemberController@memberPlan')->name('member.plan');

Route::get('/member/register', 'Myaccount\Customer\MemberController@memberRegister')->name('member.register');
Route::get('/member/pay', 'Myaccount\Customer\MemberController@memberPay')->name('member.pay');
//Route::get('/member/payment', 'Myaccount\Customer\RegisterController@memberPayment')->name('member.payment');
Route::post('/member/proceed/payment', 'Myaccount\Customer\MemberController@memberProceedPayment')->name('member.proceed.pay');


//Route::get('/member/axis', 'Myaccount\Customer\AxisController@memberInitiatePayment')->name('member.axis');
Route::post('/member/axis/response', 'Myaccount\Customer\AxisController@memberResponsePayment')->name('member.axis.status');
Route::get('/member/payment/axis/initiate', 'Myaccount\Customer\AxisController@memberInitiatePayment')->name('payment.member.axis.start');

Route::get('/member/paypal', 'Myaccount\Customer\PaypalController@memberInitiatePayment')->name('payment.member.paypal.start');
Route::get('/member/paypal/response', 'Myaccount\Customer\PaypalController@memberResponsePayment')->name('member.paypal.status');

Route::get('/member/paytm', 'Myaccount\Customer\PaytmController@memberInitiatePayment')->name('payment.member.paytm.start');
Route::post('/member/paytm/response', 'Myaccount\Customer\PaytmController@memberResponsePayment')->name('member.paytm.status');

Route::get('customer/register', 'Myaccount\Customer\RegisterController@register')->name('customer.register');
Route::post('customer/register', 'Myaccount\Customer\RegisterController@submitRegister')->name('customer.register.submit');
Route::get('/email-verify/token/{token}/email/{email}', 'Myaccount\Customer\RegisterController@verifyEmail')->name('customer.verify');
Route::get('/customer/login', 'Myaccount\Customer\LoginController@login')->name('customer.login');
Route::post('/customer/login/submit', 'Myaccount\Customer\LoginController@submitLogin')->name('customer.login.submit');
Route::post('/change-password', 'Myaccount\Customer\ProfileController@changePassword')->name('password.change.submit');
Route::get('/customer/login-success', 'Myaccount\Customer\LoginController@loginSuccess')->name('customer.login.success');
Route::get('/update-password/', 'Myaccount\Customer\PasswordController@changePassword')->name('update.password');

Route::post('/register/survey', 'Myaccount\Customer\ProfileController@customerSurvey')->name('customer.register.survey');
Route::post('/customer/mobile/verify', 'Myaccount\Customer\ProfileController@verifyMobile')->name('verify.mobile.submit');
Route::get('/logout', 'Myaccount\Customer\ProfileController@logout')->name('customer.logout');
Route::get('/cancelMemberPlan', 'Myaccount\Customer\ProfileController@cancelLogout')->name('member.logout');

// Social Login
Route::get('/social/oauth/google', 'Customer\SocialAuthController@redirectGoogle')->name('customer.social.google');
Route::get('/social/callback/google', 'Customer\SocialAuthController@callbackGoogle');

Route::get('/social/oauth/facebook', 'Customer\SocialAuthController@redirectFacebook')->name('customer.social.facebook');
Route::get('/social/callback/facebook', 'Customer\SocialAuthController@callbackFacebook');

Route::get('/migrate', 'Myaccount\Customer\ProfileController@migrate')->name('customer.migrate');
Route::get('/locker', 'Myaccount\Customer\ProfileController@lockerReadyShip')->name('customer.locker');
Route::get('/locker-mobile', 'Myaccount\Customer\ProfileController@lockerReadyShip')->name('customer.locker-mobile');
Route::get('/locker/inreview', 'Myaccount\Customer\ProfileController@lockerInreview')->name('customer.locker.review');
Route::get('/locker/action', 'Myaccount\Customer\ProfileController@lockerActionRequired')->name('customer.locker.action');
Route::get('/locker/all', 'Myaccount\Customer\ProfileController@lockerAllPackages')->name('customer.locker.all');


Route::get('/settings', 'Myaccount\Customer\ProfileController@editProfile')->name('customer.settings');
Route::post('/edit', 'Myaccount\Customer\ProfileController@postProfile')->name('customer.edit.submit');
Route::get('/incoming-order', 'Myaccount\Customer\ProfileController@incomingOrder')->name('customer.incoming');
Route::post('/incoming-order', 'Myaccount\Customer\ProfileController@incomingOrderSubmit')->name('customer.incoming.submit');


/*------ Locker Generate ---------*/

Route::get('/generate-locker', 'Myaccount\Customer\LockerGenerationController@lockerPayment')->name('locker.generate.payment');
Route::Post('/locker/generate/payment', 'Myaccount\Customer\LockerGenerationController@paymentRequest')->name('locker.generate.payment.request');
/* End Myaccount routes */

/*------ Public Pages ---------*/
Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');

/* For sentry testing Breaking the url */

Route::get('/sentry-break', 'PageController@breakSentry')->name('sentry-break');
Route::post('/ajax/login', 'PageController@ajaxLogin')->name('ajaxLogin');
Route::post('/ajax/signup', 'PageController@ajaxSignup')->name('ajaxLogin');
Route::get('/check/authenticate', 'PageController@checkAuthenticate')->name('user.check.authenticate');

Route::get('/partner', 'PageController@partner')->name('partner');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/faq/search', 'PageController@faqSearch')->name('faq.search');
Route::get('/store/search', 'PageController@storeSearch')->name('store.search');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/submit', 'PageController@submitContact')->name('contact.submit');
Route::post('/user/subscribe', 'PageController@subscribeUser')->name('subscribe-user');
Route::post('/otp/verfiy', 'PageController@verifyOtp')->name('verify-otp');
Route::post('/contact/submit', 'PageController@submitContact')->name('contact.submit');
Route::get('/terms-and-conditions', 'PageController@termsAndConditions')->name('termsAndConditions');
Route::get('/privacy-policy', 'PageController@privacyPolicy')->name('privacyPolicy');
Route::get('/refund-and-cancellation-policy', 'PageController@refundAndCancellation')->name('refundAndCancellation');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/how-it-works', 'PageController@howitworks')->name('howitworks');
Route::get('/user/{id}', 'PageController@getUserInfo')->name('user.info');
Route::post('/calculate-shipping', 'PageController@shipCalculate')->name('calculate');
Route::post('/qoute/submit', 'PageController@getQuote')->name('get.quote');
Route::get('/browse-categories', 'PageController@stores')->name('stores');
Route::post('/stores/sort', 'PageController@sortStores')->name('stores.sort');
Route::get('/reviews', 'PageController@reviews')->name('reviews');
Route::post('/more-reviews', 'PageController@moreReviews')->name('more.reviews');
Route::post('/reviews/submit', 'PageController@submitReview')->name('reviews.submit');
Route::post('/more-reviews', 'PageController@moreReviews')->name('morereviews');
Route::get('/wow/{name}/{email}/{phone_code}/{mobile}', 'SchedulePickupController@signUpPhp')->name('asignUpPhp');

/*------ Schedule Pickup ---------*/

Route::get('/schedule-pickup', 'SchedulePickupController@index')->name('schedulePickup.Index');
//Route::post('/schedule-pickup', 'SchedulePickupController@submit')->name('schedulePickup.Submit');
Route::post('/schedule-pickup/submit', 'SchedulePickupController@submit')->name('schedulePickup.submit');
Route::get('/schedule-pickup/confirm', 'SchedulePickupController@confirm')->name('confirmPickup');
Route::post('/schedule-pickup/asana-tracking', 'SchedulePickupController@asanaTracking')
    ->name('schedulePickup.asana.tracking');
Route::post('/schedule-pickup/ajexRequest', 'PageController@pickupByAjex')->name('schedulePickup.byAjex');
Route::get('/schedule-pickup/pickup-address', 'SchedulePickupController@getPickupAddress')
    ->name('schedulePickup.pickupAddress');
Route::get('/schedule-pickup/destination-address', 'SchedulePickupController@getDestinationAddress')
    ->name('schedulePickup.destinationAddress');
Route::post('/schedule-pickup/ajax/destination-address', 'SchedulePickupController@getDestinationAddressAjax')
    ->name('schedulePickup.destinationAddress.ajax');

Route::get('/countries', 'PageController@countryList')->name('countryList');
Route::get('/feedback', 'FeedbackController@index')->name('feedback.Index');
Route::post('/feedback/submit', 'FeedbackController@submit')->name('feedback.submit');
Route::get('/feedback/confirm', 'FeedbackController@confirm')->name('feedback.confirm');
Route::get('/consolidation-service', 'PageController@consolidationService')->name('consolidationService');
Route::get('/{initial}-from-{source}-to-{destination}', 'PageController@urlTargetShipping')->name('urlTargetShipping');
Route::get('/{initial}-{contents}-from-{source}-to-{destination}', 'PageController@urlTargetSend')->name('urlTargetSend');
Route::get('/{initial}-{cprefix}-{cpostfix}-from-{source}-to-{destination}', 'PageController@urlTargetContent')->name('urlTargetContent');
Route::get('/schedule-pickup/mail', 'SchedulePickupController@mail')->name('schedulePickup.mail');


Route::get('/offers', 'PageController@offersIndex')->name('offers-new.index');
Route::get('/shoppre-faq', 'PageController@shoppreFaq')->name('shoppre-faq.index');
Route::get('/faq-new', 'PageController@faqNew')->name('faq.new');
Route::get('/indian-online-stores', 'PageController@storeNew')->name('stores1');
Route::get('/pricing', 'PageController@newPricing')->name('pricing');
Route::get('/cheap-rates-international-shipping-cost-calculator', 'PageController@newPricing')->name('pricing');
Route::get('/new-pricing', 'PageController@pricing')->name('newPricing');
Route::get('/domestic-pricing', 'PageController@domesticPricing')->name('domesticPricing');

/*-------- Dhl Shipments ------*/
Route::get('/dhl', 'ShippingPartnerController@dhlIndex')->name('dhl.index');
Route::get('/dhl-new', 'ShippingPartnerController@dhlIndexNew')->name('dhlnew.index');
Route::get('/dhl/shipment/{id}', 'ShippingPartnerController@dhlShipmentDetail')->name('dhl.view');
Route::get('/dhl-new/shipment/{id}', 'ShippingPartnerController@dhlShipmentDetailNew')->name('dhl.detail');

/*-------- Fedex Shipments ------*/
Route::get('/fedex', 'ShippingPartnerController@fedexIndex')->name('fedex.index');
Route::get('/fedex/shipment/{id}', 'ShippingPartnerController@fedexShipmentDetail')->name('fedex.view');

/*-------- Dtdc Shi192.168.0.pments ------*/
Route::get('/dtdc', 'ShippingPartnerController@dtdcIndex')->name('dtdc.index');
Route::get('/dtdc/shipment/{id}', 'ShippingPartnerController@dtdcShipmentDetail')->name('dtdc.view');

/*-------- shoppre story ------*/
Route::get('/stories', 'StoryController@index')->name('story.index');
Route::get('/story/{slug}', 'StoryController@view')->name('story.detail');
Route::get('/cuelink', 'cuelinkController@index')->name('cuelink');
Route::post('/customer-search', 'PageController@searchCreate')->name('customerSearch');


/*-------- Country Specific ------*/
Route::get('/country-specific', 'PageController@getCountry')->name('home.country-specific');

/*-------- Flash Sale ------*/

Route::get('/mi.com', 'FlashSaleController@sales')->name('flash-sale.sales.list');
Route::get('/mi.com/redmi5A', 'FlashSaleController@index')->name('flash-sale.mi5A.index');
Route::get('/mi.com/redmi5A/detail', 'FlashSaleController@mi5ADetail')->name('flash-sale.mi5A.sale');
Route::get('/invite-friend', 'FlashSaleController@invite')->name('flash-sale.invite-friend');
Route::post('/invite-friend/send-invitation', 'FlashSaleController@sendInvitation')->name('flash-sale.sendInvitation');
Route::get('/send-otp', 'FlashSaleController@sendOtp')->name('flash-sale.otp');
Route::get('/success', 'FlashSaleController@sendOtp')->name('flash-sale.otp');

/*-------- partners ------*/
Route::get('/partners/dhl', 'Partner\PartnerController@index')->name('partner');
/*-------- campaign ------*/

Route::get('/campaign/{cname}/{eid}', 'CampaignController@campaignDetail')->name('campaignDetail');
Route::get('/campaign/{cname}/{channel}/{eid}', 'CampaignController@campaignDetailChannel')
    ->name('campaignDetailChannel');
Route::get('/campaigns/channel/{camp_id}', 'CampaignController@channelList')->name('channelList');
Route::get('/campaigns/channel/new/create/{camp_id}', 'CampaignController@channelCreate')->name('channelCreate');
Route::post('/campaign/channel/new/create/{camp_id}', 'CampaignController@channelSubmit')->name('channelSubmit');

/*-------- login/sign up ------*/
//Route::get('/login', 'Customer\LoginController@login')->name('customer.login');
//Route::post('/login/submit', 'Customer\LoginController@submitLogin')->name('customer.login.submit');
//Route::get('/login/register', 'Customer\LoginController@login')->name('customer.register');
//Route::post('/login/submit', 'Customer\LoginController@submitLogin')->name('customer.login.submit');
//Route::get('/register', 'Customer\RegisterController@register')->name('customer.register');
//

Route::get('/chat-email', 'PageController@chatMailIndex')->name('chatMail.index');
Route::post('/chat-email', 'PageController@chatMailSent')->name('chatMail.sent');
Route::get('/chat-e192.168.0.mail/confirm', 'PageController@chatMailConfirm')->name('chatMail.confirm');
//Route::get('/shipments', 'SchedulePickupDetailController@pickupList')->name('schedulePickup.List');
Route::get('/shipment/{id}', 'SchedulePickupDetailController@pickupView')->name('admin.schedulePickup.View');
Route::get('/campaigns', 'CampaignController@index')->name('campaign.index');
Route::get('/campaign/create', 'CampaignController@create')->name('campaign.create');
Route::post('/campaign/create', 'CampaignController@submit')->name('campaign.submit');
Route::get('/campaigns/edit/{id}', 'CampaignController@editCampaign')->name('campaignEdit');
Route::post('/campaign/edit', 'CampaignController@editSubmit')->name('campaign.editSubmit');
Route::post('home/login', 'Customer\LoginController@homeLogin')->name('homeLogin');
Route::post('home/signup', 'Customer\RegisterController@homeSignup')->name('homeSignup');
Route::get('offer/expire', 'CampaignController@expireOffer')->name('offerExpire');
Route::get('/customer-pricing', 'PageController@customerPricing')->name('customerPricing');
Route::get('/invoice', 'InvoiceController@index')->name('invoice');
Route::get('/country-guide/', 'CountryGuideController@countryGuide')->name('cguide.index');
Route::get('/country/{iso}', 'CountryGuideController@show')->name('cguide.view');
Route::get('/cguide/', 'CountryGuideController@cGuide')->name('cguide.cguide');
Route::get('/cguide/countries', 'CountryGuideController@cGuide')->name('cguide.cguideCountries');
Route::get('/cguide/{iso}', 'CountryGuideController@showCguide')->name('cguide.cguide');
Route::post('/calculate/exchange-rate', 'CountryGuideController@exchangeCalculate')->name('xchange.calc');
Route::get('/indian-virtual-address', 'PageController@indianVirtual')->name('indianVirtual');
//Route::get('/shop-from-india-ship-worldwide', 'PageController@shopFromIndia')->name('shopFromIndia');
Route::get('/sellers-shipping', 'PageController@sellerShipping')->name('sellerShipping');



/*-------- landing pages------*/
Route::get('/international-courier-shipping-services-india', 'PageController@icsIndex')->name('ics.index');
Route::get('/2018-annual-awards-international-shipping-shopping', 'PageController@award')->name('award.index');

Route::post('/mailtrain/subscribe', 'PageController@createMailTrainSubscriber')->name('mailtrain.subscribe');

//Route::get('/about-new', 'PageController@aboutIndex')->name('about-new.index');
/*--------Offer landing pages------*/
Route::get('/diwali-offer', 'PageController@diwali')->name('diwali');
Route::get('/month-end-offer-shipping-worldwide', 'PageController@monthEndOffer')->name('monthEndOffer');
Route::get('/send-valentines-day-gifts-international-shipping', 'PageController@valentines')->name('valentines');
Route::get('/face-mask-international-shipping', 'PageController@faceMask')->name('faceMask');
Route::get('/holi-india-shopping-with-international-delivery', 'PageController@holi')->name('holi');
Route::get('/easter-shopping-from-india-with-international-shipping', 'PageController@easter')->name('easter');
Route::get('/shop-ship', 'PageController@shopShipIndex')->name('shopship');
Route::get('/christmas-offer', 'PageController@christmas')->name('christmas');
Route::get('/ready-made-sarees-from-india', 'PageController@readyMadeSarees')->name('ready-made-sarees-from-india');
Route::get('/top-10-popular-books-purchased-from-india-in-2019', 'PageController@booksFromIndia')->name('books-from-india');
Route::get('/new-year-offer', 'PageController@newyear')->name('newyear');
Route::get('/university-offer', 'PageController@university')->name('university');
Route::get('/radcon', 'PageController@radioContest')->name('radio');
Route::get('/radcon-tc', 'PageController@radioTermsConditions')->name('radio.tc');
Route::get('/shipping/drop-off-location', 'PageController@dropoffLocation')->name('dropoffLocation');


Route::get('/personal-shopper-shopping-concierge-from-india', 'PageController@personalShopper')->name('personalShopper');
Route::get('/flipkart-shopping-with-shoppre-from-india', 'PageController@flipkartIndex')->name('flipkart.landing');
Route::get('/myntra-online-shopping-shipping-from-india', 'PageController@myntraIndex')->name('myntra.landing');
Route::get('/amazon-india-shop-international-shipping', 'PageController@amazonIndex')->name('amazon.landing');
Route::get('/etsy-international-shipping-from-india', 'PageController@etsyIndex')->name('etsy.landing');
Route::get('/limeroad-shopping-international-shipping', 'PageController@limeroadIndex')->name('limeroad.landing');
Route::get('/send-international-courier-from-india', 'PageController@icsLandingPage')->name('ics.landing');
Route::get('/international-parcel-forwarding-india-online-shopping', 'PageController@parcelForwarding')->name('forwarding');
Route::get('/shop-online-fashion-jabong-india-ship-internationally', 'PageController@jabongIndex')->name('jabong.landing');
Route::get('/ajio-online-shopping-international-shipping', 'PageController@ajioIndex')->name('ajio');
Route::get('/jaypore-international-shipping-from-india', 'PageController@jayporeIndex')->name('jaypore');
Route::get('/first-time-international-shipment-offer', 'PageController@firstTimeShipment')->name('first-shipment');

Route::get('/leads-e5', 'PageController@leadE5')->name('leads-e5');
Route::get('/domestic-email', 'PageController@domesticEmail')->name('domesticEmail');

//Route::get('/first-time-international-shipment-offer', 'PageController@firstTimeShipment')->name('first-shipment');
Route::get('/myntra-international-shipping-to-usa', 'PageController@myntraUsa')->name('myntra-usa');
Route::get('/flipkart-usa-shopping', 'PageController@flipkartUsa')->name('flipkart-usa');
Route::get('/jabong-usa-shipping-from-india', 'PageController@jabongUsa')->name('jabong-usa');
Route::get('/trends-ajio-usa-shipping-from-india', 'PageController@ajioUsa')->name('ajio-usa');
Route::get('/firstcry-international-shipping-usa', 'PageController@firstcryUsa')->name('firstcry-usa');
Route::get('/cheap-and-fast-shipping-service-from-india-to-usa', 'PageController@usaShipping')->name('usa-shipping');
Route::get('/shop-from-amazon-india-and-ship-to-usa', 'PageController@amznUsa')->name('amzn-usa');
Route::get('/jaypore-shopping-usa', 'PageController@jayporeUsa')->name('jaypore-usa');
Route::get('/best-international-relocation-packers-movers', 'PageController@packers')->name('packers-movers');
Route::get('/international-shipping-gift-cards-vouchers', 'PageController@voucher')->name('voucher');
Route::get('/medicine-international-courier-from-india', 'PageController@medicine')->name('medicine');
Route::get('/personal-shopper-india', 'PageController@ifsLandingPage')->name('ifs.landing');
Route::get('/seller-partner', 'PageController@seller')->name('seller');

/*-------- Ecommerce Product Landing Pages ------*/
Route::get('/flipkart-online-shopping', 'PageController@flipkartProduct')->name('flipkart-product');
Route::get('/ajio-online-shopping', 'PageController@ajioProduct')->name('ajio-product');
Route::get('/myntra-online-shopping', 'PageController@myntraProduct')->name('myntra-product');
Route::get('/amazon-online-shopping', 'PageController@amazonProduct')->name('amazon-product');
Route::get('/limeroad-online-shopping', 'PageController@limeroadProduct')->name('limeroad-product');
Route::get('/nykaa-online-shopping', 'PageController@nykaaProduct')->name('nykaa-product');
Route::get('/firstcry-online-shopping', 'PageController@firstcryProduct')->name('firstcry-product');
Route::get('/tatacliq-online-shopping', 'PageController@tatacliqProduct')->name('tatacliq-product');
Route::get('/lifestylestores-online-shopping', 'PageController@lifestylestoresProduct')->name('lifestylestores-product');
Route::get('/pepperfry-online-shopping', 'PageController@pepperfryProduct')->name('pepperfry-product');
Route::get('/fabindia-online-shopping', 'PageController@fabindiaProduct')->name('fabindia-product');
Route::get('/shoppersstop-online-shopping', 'PageController@shoppersstopProduct')->name('shoppersstop-product');
Route::get('/chumbak-online-shopping', 'PageController@chumbakProduct')->name('chumbak-product');

/*-------- Ecommerce Category Product Landing Pages ------*/
Route::get('/myntra-women-maxi-dresses-international-shipping', 'PageController@maxidressMyntra')->name('maxidress-myntra');
Route::get('/myntra-women-kurta-kurtis-international-shipping', 'PageController@kurtisMyntra')->name('kurtis-myntra');
Route::get('/wedding-sarees-women-clothing-international-shipping', 'PageController@weddingsareesMyntra')->name('weddingsarees-myntra');


/*-------- Festival Sale Landing Pages ------*/
Route::get('/kerala-onam-online-shopping-guide-from-india', 'PageController@onamGift')->name('onam-gifts');
Route::get('/indian-diwali-sweets-dryfruits-internatioanl-delivery', 'PageController@diwaliOffer')->name('diwali-offer');
Route::get('/indian-diwali-sweets-dryfruits-free-internatioanl-delivery', 'PageController@diwaliFree')->name('diwali-free');
Route::get('/onam-community-shipping-offer', 'PageController@onamCommunity')->name('onamCommunity');
Route::get('/send-rakhi-gifts-online-worldwide-at-cheap-rates', 'PageController@rakhiGift')->name('send-rakhi-gifts-online-worldwide-at-cheap-rates');
Route::get('/flipkart-national-shopping-days-sale-big-freemdom-online-shopping-india', 'PageController@flipkartNational')->name('flipkart-national');
Route::get('/amazon-india-freedom-sale-online-shopping-offers-on-fashion-mobile-phones-home-kitchen-appliances', 'PageController@amznFreedom')->name('amzn-freedom');
Route::get('/myntra-independence-sale-right-to-fashion-sale-offers-discounts-shopping', 'PageController@myntraRight')->name('myntra-right');
Route::get('/flipkart-big-billion-days-sale-offers-top-brands-stores', 'PageController@flipkartBillion')->name('flipkart-billion');
Route::get('/amazon-great-indian-festival-sales-offers-prime-members-shopping-deals-shipping', 'PageController@amazonGreat')->name('amazon-great');
Route::get('/flipstart-days-avail-best-offers-on-flipkart-enjoy-special-discounts-for-the-first-three-days-of-every-month', 'PageController@flipkartFlipstart')->name('flipkart-flipstart');
Route::get('/myntra-big-fashion-days-sale-shop-online-india', 'PageController@bigfashionMyntra')->name('bigfashion-myntra');


/*-------- New Country Guides Landing Pages ------*/
Route::get('/en-jp', 'PageController@countryJapan')->name('countryJapan');
Route::get('/en-us', 'PageController@countryUsa')->name('countryUsa');


/*-------- Per KG Landing Pages ------*/
Route::get('/dropshipping-from-india-and-worldwide-delivery', 'PageController@dropShipping')->name('dropShipping');
Route::get('/international-courier-charges-india-to-usa-per-kg', 'PageController@pricingUsa')->name('usaPerKg');
Route::get('/international-courier-charges-india-to-uae-per-kg', 'PageController@pricingUae')->name('uaePerKg');
Route::get('/international-courier-charges-india-to-canada-per-kg', 'PageController@pricingCanada')->name('canadaPerKg');
Route::get('/international-courier-charges-india-to-australia-per-kg', 'PageController@pricingAustralia')->name('australiaPerKg');
Route::get('/international-courier-charges-india-to-singapore-per-kg', 'PageController@pricingSingapore')->name('singaporePerKg');
Route::get('/international-courier-charges-india-to-germany-per-kg', 'PageController@pricingGermany')->name('germanyPerKg');
Route::get('/international-courier-charges-india-to-south-africa-per-kg', 'PageController@pricingSouthafrica')->name('southafricaPerKg');
Route::get('/international-courier-charges-india-to-japan-per-kg', 'PageController@pricingJapan')->name('japanPerKg');
Route::get('/international-courier-charges-india-to-new-zealand-per-kg', 'PageController@pricingNewzealand')->name('newzealandPerKg');
Route::get('/international-courier-charges-india-to-malaysia-per-kg', 'PageController@pricingMalaysia')->name('malaysiaPerKg');
Route::get('/international-courier-charges-india-to-mauritius-per-kg', 'PageController@pricingMauritius')->name('mauritiusPerKg');
Route::get('/international-courier-charges-india-to-denmark-per-kg', 'PageController@pricingDenmark')->name('denmarkPerKg');
Route::get('/international-courier-charges-india-to-switzerland-per-kg', 'PageController@pricingSwitzerland')->name('switzerlandPerKg');
Route::get('/international-courier-charges-india-to-qatar-per-kg', 'PageController@pricingQatar')->name('qatarPerKg');
Route::get('/international-courier-charges-india-to-mexico-per-kg', 'PageController@pricingMexico')->name('mexicoPerKg');
Route::get('/international-courier-charges-india-to-sri-lanka-per-kg', 'PageController@pricingSrilanka')->name('srilankaPerKg');
Route::get('/international-courier-charges-india-to-hong-kong-per-kg', 'PageController@pricingHongkong')->name('hongkongPerKg');
Route::get('/international-courier-charges-india-to-spain-per-kg', 'PageController@pricingSpain')->name('spainPerKg');
Route::get('/international-courier-charges-india-to-brazil-per-kg', 'PageController@pricingBrazil')->name('brazilPerKg');
Route::get('/international-courier-charges-india-to-philippines-per-kg', 'PageController@pricingPhilippines')->name('philippinesPerKg');
Route::get('/international-courier-charges-india-to-belgium-per-kg', 'PageController@pricingBelgium')->name('belgiumPerKg');
Route::get('/international-courier-charges-india-to-finland-per-kg', 'PageController@pricingFinland')->name('finlandPerKg');
Route::get('/international-courier-charges-india-to-italy-per-kg', 'PageController@pricingItaly')->name('italyPerKg');
Route::get('/international-courier-charges-india-to-saudi-arabia-per-kg', 'PageController@pricingSaudiarabia')->name('saudiarabiaPerKg');
Route::get('/international-courier-charges-india-to-nigeria-per-kg', 'PageController@pricingNigeria')->name('nigeriaPerKg');


/*-------- Schema Landing Pages ------*/
Route::get('/shipping-from-india-to-usa/las-vegas', 'PageController@lasvegasShipping')->name('usa-lasvegas');
Route::get('/shipping-from-india-to-usa/chicago', 'PageController@chicagoShipping')->name('usa-chicago');
Route::get('/shipping-from-india-to-usa/los-angeles', 'PageController@losangelesShipping')->name('usa-losangeles');
Route::get('/shipping-from-india-to-usa/michigan', 'PageController@michiganShipping')->name('usa-michigan');
Route::get('/shipping-from-india-to-usa/new-jersey', 'PageController@newjerseyShipping')->name('usa-newjersey');
Route::get('/shipping-from-india-to-usa/florida', 'PageController@floridaShipping')->name('usa-florida');
Route::get('/shipping-from-india-to-usa/new-york', 'PageController@newyorkShipping')->name('usa-newyork');
Route::get('/shipping-from-india-to-usa/california', 'PageController@californiaShipping')->name('usa-california');
Route::get('/shipping-from-india-to-usa/texas', 'PageController@texasShipping')->name('usa-texas');
Route::get('/shipping-from-india-to-usa/virginia', 'PageController@virginiaShipping')->name('usa-virginia');
Route::get('/shipping-from-india-to-usa/washington', 'PageController@washingtonShipping')->name('usa-washington');
Route::get('/shipping-from-india-to-usa/san-francisco', 'PageController@sanfranciscoShipping')->name('usa-sanfrancisco');
Route::get('/shipping-from-india-to-usa/illinois', 'PageController@illinoisShipping')->name('usa-illinois');
Route::get('/shipping-from-india-to-usa/georgia', 'PageController@georgiaShipping')->name('usa-georgia');
Route::get('/shipping-from-india-to-usa/arizona', 'PageController@arizonaShipping')->name('usa-arizona');
Route::get('/shipping-from-india-to-usa/pennsylvania', 'PageController@pennsylvaniaShipping')->name('usa-pennsylvania');
Route::get('/shipping-from-india-to-usa/colorado', 'PageController@coloradoShipping')->name('usa-colorado');
Route::get('/shipping-from-india-to-usa/alaska', 'PageController@alaskaShipping')->name('usa-alaska');
Route::get('/shipping-from-india-to-usa/delaware', 'PageController@delawareShipping')->name('usa-delaware');
Route::get('/shipping-from-india-to-usa/alabama', 'PageController@alabamaShipping')->name('usa-alabama');
Route::get('/shipping-from-india-to-usa/arkansas', 'PageController@arkansasShipping')->name('usa-arkansas');
Route::get('/shipping-from-india-to-usa/hawaii', 'PageController@hawaiiShipping')->name('usa-hawaii');
Route::get('/shipping-from-india-to-usa/detroit', 'PageController@detroitShipping')->name('usa-detroit');
Route::get('/shipping-from-india-to-usa/austin', 'PageController@austinShipping')->name('usa-austin');
Route::get('/shipping-from-india-to-usa/connecticut', 'PageController@connecticutShipping')->name('usa-connecticut');
Route::get('/shipping-from-india-to-usa/north-america', 'PageController@northamericaShipping')->name('usa-northamerica');
Route::get('/shipping-from-india-to-usa/edison', 'PageController@edisonShipping')->name('usa-edison');
Route::get('/shipping-from-india-to-usa/jersey-city', 'PageController@jerseycityShipping')->name('usa-jerseycity');
Route::get('/shipping-from-india-to-usa/rockland-county', 'PageController@rocklandcountyShipping')->name('usa-rocklandcounty');
Route::get('/shipping-from-india-to-usa/cupertino', 'PageController@cupertinoShipping')->name('usa-cupertino');
Route::get('/shipping-from-india-to-usa/palo-alto', 'PageController@paloaltoShipping')->name('usa-paloalto');
Route::get('/shipping-from-india-to-usa/caribbean', 'PageController@caribbeanShipping')->name('usa-caribbean');
Route::get('/shipping-from-india-to-usa/east-west-coast', 'PageController@eastwestShipping')->name('usa-eastwest');


//Route::get('/international-shipping-calculator', 'PageController@pricing1')->name('pricing1');
/*-------- Video landing pages------*/
Route::get('/package-consolidation-international-shipping', 'PageController@videoLpConsolidation')->name('videoLpConsolidation');
Route::get('/best-affordable-international-courier-services-in-india', 'PageController@videoLpCourier')->name('videoLpCourier');
Route::get('/personal-shopper-online-shopping-from-india-shipping', 'PageController@videoLpShopper')->name('videoLpShopper');
Route::get('/priyamani-ad-launch-parcel-forwarding-service-from-india', 'PageController@videoLpPriyamani')->name('videoLpPriyamani');
Route::get('/online-shopping-and-international-shipping-sit-back-relax-shop-from-india', 'PageController@videoLpGPepper')->name('videoLpGPepper');

Route::post('/leads/signup', 'LeadController@create')->name('leads.signup');
Route::post('/campaign/newaspaper', 'PageController@saveFlyerUser')->name('flyerUser');
Route::post('/subscribe', 'PageController@createSubscriber')->name('subscribe');
Route::post('/diwali-offer', 'PageController@diwaliCoupon')->name('diwali');
Route::post('/new-year-offer', 'PageController@newYearOffer')->name('new.year');
Route::get('/republic-day-shipping-offer', 'PageController@republicDay')->name('republicDay');
Route::post('/send-international-courier-from-india', 'PageController@icsLandingPageSubmit')->name('icslandingpage');
Route::post('/personal-shopper-india', 'PageController@psLandingPageSubmit')->name('pslandingpage');
Route::post('/radcon', 'PageController@radconSubmit')->name('radcon');
Route::post('/christmas', 'PageController@christmasSubmit')->name('christmas');
Route::post('/university', 'PageController@universitySubmit')->name('university');
Route::post('/shop-ship', 'PageController@shopShip')->name('shopShip');
Route::post('/valentines-cashback', 'PageController@apiValentines')->name('valentine');
Route::post('/medicine', 'PageController@apiMedicine')->name('apiMedicine');
Route::post('/seller', 'PageController@apiSellerPartner')->name('apiSeller');
Route::post('/parcel-forwarding', 'PageController@apiParcelForwarding')->name('apiParcelForwarding');
Route::post('/apiVideoConsolidation', 'PageController@apiVideoConsolidation')->name('apiVideoConsolidation');
Route::post('/apiVideoCourier', 'PageController@apiVideoCourier')->name('apiVideoCourier');
Route::post('/apiVideoPs', 'PageController@apiVideoPs')->name('apiVideoPs');
Route::post('/apiVideoPriyamani', 'PageController@apiVideoPriyamani')->name('apiVideoPriyamani');
Route::post('/apiVideoGPepper', 'PageController@apiVideoGPepper')->name('apiVideoGPepper');

Route::get('/ja-jp', 'PageController@shopShipjp')->name('shopShipjp');

Route::post('/api-pricing-calculator', 'PageController@apiPricingCalculator')->name('apiPricingCalculator');
Route::post('/api-pricing-usa', 'PageController@apiPricingUsa')->name('apiPricingUsa');
Route::post('/api-pricing-uae', 'PageController@apiPricingUae')->name('apiPricingUae');
Route::post('/api-pricing-canada', 'PageController@apiPricingCanada')->name('apiPricingCanada');
Route::post('/api-pricing-australia', 'PageController@apiPricingAustralia')->name('apiPricingAustralia');
Route::post('/api-pricing-singapore', 'PageController@apiPricingSingapore')->name('apiPricingSingapore');
Route::post('/api-pricing-germany', 'PageController@apiPricingGermany')->name('apiPricingGermany');
Route::post('/api-domestic', 'PageController@apiDomesticPricing')->name('apiPricingGermany');


Route::get('/{slug}', 'PageController@viewPage')->name('page');
/*-------- landing pages------*/










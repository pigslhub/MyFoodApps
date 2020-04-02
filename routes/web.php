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

Route::get('/', function () {
    return view('default');
});

Auth::routes();
//user routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');


//Route::view('/', 'default')->name('/');
//Route::view('/dashboard', 'default')->name('default  ');
//Route::view('/inner-page', 'inner-page')->name('inner-page');




//admin routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('login', 'LoginController@login')->name('admin.login.submit');
        Route::get('logout', 'LoginController@logout')->name('admin.logout');
        Route::get('admin/create', 'RegisterController@create')->name('admin.create');
        Route::post('admin/store', 'RegisterController@store')->name('admin.store');
        Route::get('admin/edit{id}', 'RegisterController@edit')->name('admin.edit');
        Route::post('admin/update/{id}', 'RegisterController@update')->name('admin.update');
        Route::get('admin/destroy', 'RegisterController@destroy')->name('admin.destroy');
        Route::get('admin/activate/{id}', 'RegisterController@activateAdmin')->name('admin.activate');
        Route::get('admin/deactivate/{id}', 'RegisterController@deactivateAdmin')->name('admin.deactivate');
    });

    //profile routes

    Route::group(['prefix' => 'profile'], function () {
        Route::get('index', 'ProfileController@index')->name('admin.profile.index');
        Route::post('update', 'ProfileController@update')->name('admin.profile.update');
    });

    //Categories routes
    Route::group(['prefix' => 'category'], function () {

        Route::get('create', 'CategoryController@create')->name('admin.category.create');
        Route::post('store', 'CategoryController@store')->name('admin.category.store');
        Route::get('edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
        Route::post('update/{id}', 'CategoryController@update')->name('admin.category.update');
        Route::get('destroy/{id}', 'CategoryController@destroy')->name('admin.category.destroy');
    });
    //Services routes
    Route::group(['prefix' => 'service'], function () {

        Route::get('create', 'ServiceController@create')->name('admin.service.create');
        Route::post('store', 'ServiceController@store')->name('admin.service.store');
        Route::get('edit/{id}', 'ServiceController@edit')->name('admin.service.edit');
        Route::post('update/{id}', 'ServiceController@update')->name('admin.service.update');
        Route::get('destroy/{id}', 'ServiceController@destroy')->name('admin.service.destroy');
    });

    //Services and Categories binding routes
    Route::group(['prefix' => 'bindServiceAndCategory'], function () {

        Route::get('create', 'BindServiceAndCategoryController@create')->name('admin.serviceAndCategory.create');
        Route::post('store', 'BindServiceAndCategoryController@store')->name('admin.serviceAndCategory.store');
        //        Route::get('edit/{id}', 'BindServiceAndCategoryController@edit')->name('admin.serviceAndCategory.edit');
        //        Route::post('update/{id}', 'BindServiceAndCategoryController@update')->name('admin.serviceAndCategory.update');
        Route::get('destroy/{id}', 'BindServiceAndCategoryController@destroy')->name('admin.serviceAndCategory.destroy');
    });


    //Shop Types routes
    Route::group(['prefix' => 'shopType', 'namespace' => 'shopMgt'], function () {

        Route::get('create', 'ShopTypeController@create')->name('admin.shopType.create');
        Route::post('store', 'ShopTypeController@store')->name('admin.shopType.store');
        Route::get('edit/{id}', 'ShopTypeController@edit')->name('admin.shopType.edit');
        Route::post('update/{id}', 'ShopTypeController@update')->name('admin.shopType.update');
        Route::get('destroy/{id}', 'ShopTypeController@destroy')->name('admin.shopType.destroy');
    });

    //Shop routes
    Route::group(['prefix' => 'shop', 'namespace' => 'shopMgt'], function () {

        Route::get('create', 'ShopController@create')->name('admin.shop.create');
        // Route::get('create', 'DriverController@create')->name('admin.shop.create');
        Route::post('store', 'ShopController@store')->name('admin.shop.store');
        Route::get('edit/{id}', 'ShopController@edit')->name('admin.shop.edit');
        Route::post('update/{id}', 'ShopController@update')->name('admin.shop.update');
        Route::get('destroy/{id}', 'ShopController@destroy')->name('admin.shop.destroy');
        Route::get('activate/{id}', 'ShopController@activateShop')->name('admin.shop.activate');
        Route::get('deactivate/{id}', 'ShopController@deactivateShop')->name('admin.shop.deactivate');
        Route::get('viewAllShopsAtFront/{id}', 'ShopController@viewAllShopsAtFront')->name('admin.shop.viewallatfront');
    });

    //Driver routes
    Route::group(['prefix' => 'driver', 'namespace' => 'driverMgt'], function () {

        Route::get('create', 'DriverController@create')->name('admin.driver.create');
        // Route::get('create', 'DriverController@create')->name('admin.shop.create');
        Route::post('store', 'DriverController@store')->name('admin.driver.store');
        Route::get('edit/{id}', 'DriverController@edit')->name('admin.driver.edit');
        Route::post('update/{id}', 'DriverController@update')->name('admin.driver.update');
        Route::get('destroy/{id}', 'DriverController@destroy')->name('admin.driver.destroy');
        Route::get('activate/{id}', 'DriverController@activateShop')->name('admin.driver.activate');
        Route::get('deactivate/{id}', 'DriverController@deactivateShop')->name('admin.driver.deactivate');
    });

    //Customer routes
    Route::group(['prefix' => 'customer', 'namespace' => 'customerMgt'], function () {

        Route::get('showAll', 'CustomerController@create')->name('admin.customer.create');
        Route::get('destroy/{id}', 'CustomerController@destroy')->name('admin.customer.destroy');
        Route::get('activate/{id}', 'CustomerController@activateCustomer')->name('admin.customer.activate');
        Route::get('deactivate/{id}', 'CustomerController@deactivateCustomer')->name('admin.customer.deactivate');
    });

    //Conversation routes
    Route::group(['prefix' => 'conversations', 'namespace' => 'chatMgt'], function () {
        Route::get('showAll', 'ChatController@create')->name('admin.conversations.create');
        Route::get('completeChat/{id}', 'ChatController@completeChat')->name('admin.conversations.completeChat');
        Route::get('destroy/{id}', 'ChatController@destroy')->name('admin.conversations.destroy');
    });

    //order routes

    Route::group(['namespace' => 'shopMgt', 'prefix' => 'orders'], function () {

        Route::get('viewAllOrders', 'OrderController@viewAllOrders')->name('admin.order.viewAll');
        Route::get('viewSingleOrder/{id}', 'OrderController@viewSingleOrder')->name('admin.order.viewSingle');
        Route::get('viewSingleOrder/{order_id}/{newStatus}', 'OrderController@changeOrderStatus')->name('admin.order.changeStatus');
    });
});


//shop routes

Route::group(['namespace' => 'Shop', 'prefix' => 'shop'], function () {
    Route::get('/', 'ShopController@index')->name('shop.home');

    //auth routes

    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('shop.login');
        Route::post('login', 'LoginController@login')->name('shop.login.submit');
        Route::get('logout', 'LoginController@logout')->name('shop.logout');
    });

    //profile routes

    Route::group(['prefix' => 'profile'], function () {
        Route::get('index', 'ProfileController@index')->name('shop.profile.index');
        Route::post('updateEmailAndPassword', 'ProfileController@updateEmailAndPassword')->name('shop.profile.updateEmailAndPassword');
        Route::post('update', 'ProfileController@update')->name('shop.profile.update');
    });

    //Category routes

    Route::get('selectCategory', 'ShopController@selectCategory')->name('shop.selectCategory');
    Route::post('selectService/{id}', 'ShopController@selectService')->name('shop.selectService');
    Route::post('storeService', 'ShopController@store')->name('shop.store');
    Route::get('showMyCategories', 'ShopController@showMyCategories')->name('shop.showMyCategories');
    Route::get('showMyServices/{id}', 'ShopController@showMyServices')->name('shop.showMyServices');
    Route::get('deleteMyService/{id}', 'ShopController@destroy')->name('shop.deleteMyService');

    //order routes

    Route::group(['namespace' => 'Chat', 'prefix' => 'orders'], function () {

        Route::get('viewAllOrders', 'OrderController@viewAllOrders')->name('shop.order.viewAll');
        Route::get('viewSingleOrder/{id}', 'OrderController@viewSingleOrder')->name('shop.order.viewSingle');
        Route::get('viewSingleOrder/{order_id}/{newStatus}', 'OrderController@changeOrderStatus')->name('shop.order.changeStatus');
    });

    //chat routes

    Route::group(['namespace' => 'Chat'], function () {
        Route::get('conversation', 'ChatController@index')->name('shop.conversation.index');
        Route::get('conversation/chat/{id}', 'ChatController@viewSingleChatComplete')->name('shop.conversation.chat');
        Route::post('conversation/chat/send', 'ChatController@store')->name('shop.conversation.chat.send');
        Route::post('conversation/chat/viewAll', 'ChatController@viewAllChat')->name('shop.conversation.chat.viewAll');
        Route::get('conversation/chat/order/{cusid}/{conid}', 'OrderController@index')->name('shop.order.create');
        Route::post('conversation/chat/order/store', 'OrderController@store')->name('shop.order.store');
        Route::post('conversation/chat/order/show', 'OrderController@showOrderToCustomer')->name('shop.order.showOrderToCustomer');
    });

    //advertisement routes

    Route::group(['prefix' => 'advertisement'], function () {
        Route::get('create', 'AdvertisementController@create')->name('shop.advertisement.create');
        Route::post('store', 'AdvertisementController@store')->name('shop.advertisement.store');
        Route::get('edit/{id}', 'AdvertisementController@edit')->name('shop.advertisement.edit');
        Route::post('update/{id}', 'AdvertisementController@update')->name('shop.advertisement.update');
    });
});

//Driver routes

Route::group(['namespace' => 'Driver', 'prefix' => 'driver'], function () {
    Route::get('/', 'DriverController@index')->name('driver.home');
    Route::group(['namespace' => 'Auth'], function () {

        Route::get('login', 'LoginController@showLoginForm')->name('driver.login');
        Route::post('login', 'LoginController@login')->name('driver.login.submit');
        Route::get('logout', 'LoginController@logout')->name('driver.logout');
    });
});

//Customers routes

Route::group(['namespace' => 'Customer', 'prefix' => 'customer'], function () {
    Route::get('/', 'CustomerController@index')->name('customer.home');
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('customer.login');
        Route::post('login', 'LoginController@login')->name('customer.login.submit');
        Route::get('logout', 'LoginController@logout')->name('customer.logout');
        Route::get('register', 'RegisterController@showRegistrationForm')->name('customer.register');
        Route::post('register', 'RegisterController@register')->name('customer.register.submit');
    });
});


Route::get('firebase/{chat_id}', 'FirebaseController@index')->name('firebase.index');

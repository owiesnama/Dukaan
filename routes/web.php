<?php

Route::get('/', function () {
    return redirect('/shop');
});

Auth::routes();

Route::get('/shop', 'HomeController@index')->name('home');

Route::get('/category/{category}/products/', 'CategoryProductsController@index');

Route::get('/products/{product}', 'ProductsController@show');

Route::post('/products/{product}/rate', 'ProductRatingController@store')->middleware('auth');

Route::post('/products/{product}/reviews', 'ProductReviewsController@store')->middleware('auth');

Route::delete('/products/{product}/reviews/{review}', 'ProductReviewsController@destroy')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/pages/{page}', 'PagesController@show');


Route::post('/cart/{product}', 'CartController@store');
Route::put('/cart/{product}', 'CartController@update');
Route::delete('/cart/{rowId}', 'CartController@destroy');


Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout/{order}', 'CheckoutController@show')->name('checkout.show');
Route::get('/my-account', 'UserAccountController@index')->name('user account');
Route::get('/search', 'ProductSearchController@index');
Route::get('/contact-us', 'PagesController@contactUs')->name('contact us');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->namespace('Admin')
    ->name('admin.')
    ->group(function () {
        Route::redirect('/', 'admin/dashboard');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');
        Route::resource('collections', 'CollectionsController');
        Route::resource('orders', 'OrdersController')->only(['index', 'show', 'update']);
        Route::get('pages', 'PagesController@index')->name('pages.index');
        Route::patch('pages', 'PagesController@update')->name('pages.update');

        Route::get('dashboard', 'DashboardController@index');
        Route::name('remove-media')->get('remove-media/{media}', 'RemoveMediaController');
    });


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('admin');

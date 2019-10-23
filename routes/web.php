<?php

Route::get('/', function () {
    return redirect('/shop');
});

Auth::routes();

Route::get('/shop', 'HomeController@index')->name('home');

Route::get('/category/{category}/products/', 'CategoryProductsController@index');

Route::get('/products/{product}', 'ProductsController@show');

Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/cart/{product}', 'CartController@store');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout/{order}', 'CheckoutController@show')->name('checkout.show');

Route::get('/contact-us', 'PagesController@contactUs')->name('contact us');

Route::prefix('admin')
    ->middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');

        Route::get('dashboard', 'DashboardController@index');
        Route::name('remove-media')->get('remove-media/{media}', 'RemoveMediaController');
    });

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

Route::get('/','ViewsController@home')->name('home');
Route::get('/terms','ViewsController@terms')->name('terms');
Route::get('/privacy','ViewsController@privacy')->name('Privacy');
Route::get('/galery','ViewsController@galery')->name('galery');
Route::get('/artist','ViewsController@artist')->name('artist');
Route::get('/category/{id}','ViewsController@category')
    ->where(array("id" => "[0-9]+"))
    ->name('category');
Route::get('/artist/{id}','ViewsController@artistId')
    ->where(array("id" => "[0-9]+"))
    ->name('artistId');
Route::get('/product/{id}','ViewsController@product')
    ->where(array("id" => "[0-9]+"))
    ->name('product');
Route::get('/about','ViewsController@about')->name('about');
Route::get('/contact','ViewsController@contact')->name('contact');
Route::get('/how-to-buy','ViewsController@howbuy')->name('howbuy');
Route::get('/account','ViewsController@account')->name('account');
Route::get('/historial','ViewsController@historial')->name('historial');
Route::get('/wishlist','ViewsController@wishlist')->name('wishlist');
Route::get('/sell','ViewsController@sell')->name('sell');
Route::get('/shop','ViewsController@shop')->name('shop');
Route::get('/order','ViewsController@order')->name('order');

//controllers life
Route::post('newsletter','IndexController@Newsletter');
Route::post('contactGo','IndexController@contactGo');
Route::get('email',function (){
    return view('emails.EmailPedido');
});
Route::post('register','IndexController@RegisterUser');
Route::get('logOut', 'IndexController@LogOut')->name('LogOut');
Route::post('login','IndexController@Login');
Route::post('forgetPassword', 'IndexController@ForgetPassword');
Route::any('/searchProductsFilter/{min}/{max}/{name}/{category}/{color}/{order}', [
    'as' => '/products/searchProductsFilter',
    'uses' => 'IndexController@SearchProductsFilter'
]);
Route::any('/searchArtistFilter/{name}/{category}/{order}', [
    'as' => '/products/searchProductsFilter',
    'uses' => 'IndexController@SearchArtistFilter'
]);
Route::post('buyProduct', 'ProductController@BuyProductAddCar');
//======add_wishes=======//
Route::post('addWishes','IndexController@AddWishes');
Route::post('deleteWishes','IndexController@DeleteWishes');
//======shopping======//
Route::post('deleteMoreOrder', 'ShoppingController@DeleteProduct');
Route::post('plusMoreOrder', 'ShoppingController@PlusMoreOrder');
Route::post('lessMoreOrder', 'ShoppingController@LessMoreOrder');
Route::post('subtotalpay', 'ShoppingController@SubTotalPay');
//======Get Information======//
Route::post('getStates','IndexController@GetStates');
Route::post('getCities','IndexController@GetCities');
//======order======//
Route::post('goPedido', 'PayController@GoPedido');
Route::get('/payu','ViewsController@Payu');
Route::get('/responsePayu','ViewsController@ResponsePayu');
Route::post('validarPagoPayu','PayController@ValidarPagoPayu');
Route::post('confirmationPayu','PayController@ConfirmationPayu');
//======account=======//
Route::post('accountChange','AccountController@accountChange');
Route::post('passwordChange','AccountController@passwordChange');

Route::get('change-price/{id}', 'IndexController@ChangePrice')
    ->name('change-price')
    ->where(array("id" => "[0-9]+"));;

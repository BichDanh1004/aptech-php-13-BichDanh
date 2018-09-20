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
    return view('welcome');
});
Route::get('/a',function(){
    return view('user/adidas_shoe');
});
Route::get('/content',function(){
    return view('user/content');
});
Route::get('/genuine_shoe',function()
{
    return view('user/genuine_shoe');
});
Route::get('/nike_shoe',function()
{
    return view('user/nike_shoe');
});
Route::get('/adidas_shoe',function()
{
    return view('user/adidas_shoe');
});
Route::get('/guide',function()
{
    return view('user/size_guide');
});
Route::get('/login',function()
{
    return view('user/login');
});
Route::get('/signup',function()
{
    return view('user/signup');
});
Route::get('/size_guide',function()
{
    return view('user/size_guide');
});
Route::get('/genuine_shoe',function()
{
    return view('user/genuine_shoe');
});
Route::get('/men_shoe',function()
{
    return view('user/men_shoe');
});
Route::get('/women_shoe',function()
{
    return view('user/women_shoe');
});
Route::get('/signup','PageController@getSignup');
Route::post('/signup','PageController@postSignup');

Route::get('/shoppingcart',function()
{
    return view('user/shoppingcart');
});


Route::get('/detail',function()
{
    return view('user/product_detail');
});



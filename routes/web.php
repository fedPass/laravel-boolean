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
    return view('home', ['title'=>'Il corso per diventare web developer e trovare un nuovo lavoro']);
})->name('home');

Route::get('/privacy-policy', function () {
    return view('privacy-policy', ['title'=>'Privacy Policy - Boolean Careers']);
})->name('privacy-policy');

Route::get('/faq', function () {
    return view('faq', ['title'=>'FAQ - Boolean Careers', 'lista_faq_dx'=>config('faq.faqs-dx'), 'lista_faq_sx'=>config('faq.faqs-sx')]);
})->name('faq');

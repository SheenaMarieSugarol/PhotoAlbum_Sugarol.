<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('pages.home');})->name(name: 'home');
Route::get('/page1', function () {
    return view ('pages.page1');})->name (name: 'page1');
Route::get('/page2', function () {
    return view ('pages.page2');})->name (name: 'page2');
Route::get('/page3', function () {
    return view ('pages.page3');})->name (name: 'page3');
Route::get('/page4', function () {
    return view ('pages.page4');})->name (name: 'page4');
Route::get('/page5', function () {
    return view ('pages.page5');})->name (name: 'page5');






<?php

use Illuminate\Support\Facades\Route;

Route::get('/evaluation/{name?}/{prelim?}/{midterm?}/{final?}', function ($name = null, $prelim = null, $midterm = null, $final = null) {

    return view('evaluation', compact('name', 'prelim', 'midterm', 'final'));

});

<?php

Route::get('styleguide', '\IN10\Styleguide\Controllers\StyleguideController@index')->name('styleguide.index');
Route::get('styleguide/{template?}', '\IN10\Styleguide\Controllers\StyleguideController@show')->name('styleguide.show');

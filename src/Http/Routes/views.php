<?php

Route::prefix('laramenu-test/bootstrap3')->middleware(['web'])
    ->namespace('\Global4Communications\LaraMenu\Http\Controllers')
    ->name('laramenu.bs4.')
    ->group(function(){

        Route::get('standard', 'TestBS3Controller@standard')->name('standard');

    });


Route::prefix('laramenu-test/crm')->middleware(['web'])
    ->namespace('\Global4Communications\LaraMenu\Http\Controllers')
    ->name('laramenu.bs4.')
    ->group(function(){

        Route::get('main', 'Global4TestController@crm')->name('crm');

    });

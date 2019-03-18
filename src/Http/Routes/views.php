<?php

Route::prefix('laramenu-test/bootstrap3')->middleware(['web'])
    ->namespace('\Global4Communications\Residential\Signup\Http\Controllers')
    ->name('laramenu.bs4.')
    ->group(function(){

        Route::get('standard', 'TestBS3Controller@standard')->name('standard');

    });

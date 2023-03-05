<?php

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
| These Routes are common routes
|
 */

/*
 * Temporary dummy route for testing SPA.
 */

Route::prefix('web-user')->namespace ('User')->group(function () {
//WebUserControllerController NOT FOUND
    // Route::get('login', 'WebUserControllerController@viewLogin');


});


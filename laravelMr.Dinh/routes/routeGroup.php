<?php

use App\Http\Controllers\CalculaterController;
use Brick\Math\Internal\Calculator;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'tutorial'], function(){
    Route::get('/aws', function(){
        echo "aws tutorial";
        });
Route::get('/jira', function()
    {
        echo "jira tutorial";
    });
Route::get('/testing', function()
{
    echo "testing tutorial";
});
});
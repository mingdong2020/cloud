<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::rule('api/send', 'Email/send', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => env('app_debug') ? 'http://172.20.10.4:9090' : 'http://mdtzzx.com'
    ]);

Route::rule('home/record', 'Record/index', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);
Route::rule('api/menu', 'Navicon/index', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);
Route::rule('api/equity', 'Navicon/equity', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);
Route::rule('api/service', 'Navicon/service', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/agency', 'Equity/agency', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/assets', 'Equity/assets', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/broker', 'Equity/broker', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/equity', 'Equity/equity', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/factor', 'Equity/factor', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/invest', 'Equity/invest', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/itloan', 'Equity/itloan', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/lease', 'Equity/lease', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/loan', 'Equity/loan', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/other', 'Equity/other', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/pawn', 'Equity/pawn', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/private', 'Equity/private', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);
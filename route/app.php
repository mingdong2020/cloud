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
Route::rule('api/inform', 'Navicon/inform', 'POST')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/agency', 'Equity/agency', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/assets', 'Equity/assets', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/broker', 'Equity/broker', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/equity', 'Equity/equity', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/factor', 'Equity/factor', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/invest', 'Equity/invest', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/itloan', 'Equity/itloan', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/lease', 'Equity/lease', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/loan', 'Equity/loan', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/other', 'Equity/other', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/pawn', 'Equity/pawn', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);

Route::rule('api/equity/private', 'Equity/private', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);
// 短链接
Route::rule('e2fc', 'Short/short', 'GET')
    ->allowCrossDomain([
        'Access-Control-Allow-Origin' => '*'
    ]);
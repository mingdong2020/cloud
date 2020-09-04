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
// Route::rule('api/login', 'Login/wechat', 'GET')
//     ->allowCrossDomain([
//         'Access-Control-Allow-Origin' => env('app_debug') ? 'http://172.31.1.200:9090' : 'http://mdtzzx.com'
//     ]);

<?php
namespace app\controller;

use think\facade\View;

class Order
{
    public function index()
    {
        return View::fetch();
    }
}

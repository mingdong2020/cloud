<?php
namespace app\controller;

use app\BaseController;

class Short extends BaseController
{
    public function short()
    {
        $url = 'https://market.aliyun.com/products/56838014/cmfw00043491.html?#sku=yuncode3749100001';
        echo "<script>window.location.href='$url';</script>";
    }
}

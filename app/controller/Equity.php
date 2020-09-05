<?php
namespace app\controller;

use app\BaseController;

class Equity extends BaseController
{
    public function agency()
    {
        $data = file_get_contents('statics/json/data-equity-agency.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function assets()
    {
        $data = file_get_contents('statics/json/data-equity-assets.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function broker()
    {
        $data = file_get_contents('statics/json/data-equity-broker.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function equity()
    {
        $data = file_get_contents('statics/json/data-equity-equity.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function factor()
    {
        $data = file_get_contents('statics/json/data-equity-factor.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }
    public function invest()
    {
        $data = file_get_contents('statics/json/data-equity-invest.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function itloan()
    {
        $data = file_get_contents('statics/json/data-equity-itloan.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function lease()
    {
        $data = file_get_contents('statics/json/data-equity-lease.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function loan()
    {
        $data = file_get_contents('statics/json/data-equity-loan.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function other()
    {
        $data = file_get_contents('statics/json/data-equity-other.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function pawn()
    {
        $data = file_get_contents('statics/json/data-equity-pawn.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }

    public function private()
    {
        $data = file_get_contents('statics/json/data-equity-private.json');
        $params = array(
            'status' => true,
            'title'  => '股权信息服务中心！',
            'data'   => json_decode($data)
        );
        return json($params);
    }
}
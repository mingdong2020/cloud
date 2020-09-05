<?php
namespace app\controller;

use app\BaseController;

class Navicon extends BaseController
{
    public function index()
    {
        $company = array(
            "navIconUrl"  => "/page/service/company-sh/company-sh",
            "navIconImg"  => "/image/nav-company.png",
            "navIconText" => "公司注册"
        );
        $tax = array(
            "navIconUrl"  => "/page/service/tax-sh/tax-sh",
            "navIconImg"  => "/image/nav-tax.png",
            "navIconText" => "财政扶持"
        );
        $equity = array(
            "navIconUrl"  => "/page/service/equity-lease/equity-lease",
            "navIconImg"  => "/image/nav-equity.png",
            "navIconText" => "股权信息"
        );
        $agency = array(
            "navIconUrl"  => "/page/service/agency/agency",
            "navIconImg"  => "/image/nav-agency.png",
            "navIconText" => "财务代理"
        );
        $appro = array(
            "navIconUrl"  => "/page/service/appro-alcohol/appro-alcohol",
            "navIconImg"  => "/image/nav-appro.png",
            "navIconText" => "专项审批"
        );
        $card = array(
            "navIconUrl"  => "/page/service/card-nav/card-nav",
            "navIconImg"  => "/image/nav-card.png",
            "navIconText" => "增值电信"
        );
        $form = array(
            "navIconUrl"  => "/page/sense/form/form",
            "navIconImg"  => "/image/sense-form.png",
            "navIconText" => "留言预约"
        );
        $params = array(
            'status' => true,
            'data'   => [
                [$company, $tax, $agency, $appro, $card],
                [$form]
            ]
        );
        // 审核不通过暂时办法
        // $params = array(
        //     'status' => true,
        //     'data'   => [
        //         [$company, $tax, $equity, $agency, $appro],
        //         [$card, $form]
        //     ]
        // );
        return json($params);
    }
}

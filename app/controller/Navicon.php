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

    public function equity()
    {
        $company01 = array(
            "equityUrl"    => "/page/service/equity-lease-detail/equity-lease-detail?id=3",
            "equityImg"    => "https://mdqygl.cn/static/source/equity/lease_show03.jpg",
            "equityTitle"  => "名称：上海**融资租赁有限公司",
            "equityAddres" => "地址：中国（上海）自由贸易试验区**室",
            "equityDate"   => "日期：2017年08月11日 发布"
        );
        $company02 = array(
            "equityUrl"    => "/page/service/equity-agency-detail/equity-agency-detail?id=3",
            "equityImg"    => "https://mdqygl.cn/static/source/equity/agency_show03.jpg",
            "equityTitle"  => "名称：**保险代理有限公司",
            "equityAddres" => "地址：中国(上海)自由贸易试验区锦康路**号",
            "equityDate"   => "日期：2017年09月25日 发布"
        );
        $company03 = array(
            "equityUrl"    => "/page/service/equity-factor-detail/equity-factor-detail?id=4",
            "equityImg"    => "https://mdqygl.cn/static/source/equity/factor_show04.jpg",
            "equityTitle"  => "名称：华***国际商业保理有限公司",
            "equityAddres" => "地址：中国(上海)自由贸易试验区**路*号",
            "equityDate"   => "2017年06月29日 发布"
        );
        $params = array(
            'status' => true,
            'theme'  => '股权信息服务',
            'data'   => [
                [$company01, $company02, $company03],
            ]
        );
        return json($params);
    }
}
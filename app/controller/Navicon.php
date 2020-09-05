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
            'more'   => false,
            'theme'  => '股权信息服务',
            'data'   => [
                // [$company01, $company02, $company03],
            ]
        );
        return json($params);
    }

    public function service() {
        $company = array(
            "id"      => 'company',
            "name"    => '公司注册',
            "open"    => false,
            "pages"   => ['上海公司注册', '深圳公司注册', '浙江自贸区注册'],
            "pageurl" => ['company-sh', 'company-sz', 'company-zj']
        );
        $tax = array(
            "id"      => 'tax',
            "name"    => '财政扶持',
            "open"    => false,
            "pages"   => ['上海园区', '浙江自贸区'],
            "pageurl" => ['tax-sh', 'tax-zj'] 
        );
        $equity = array(
            "id"      => 'equity',
            "name"    => '股权信息服务',
            "open"    => false,
            "pages"   => ['融资租赁', '商业保理', '保险经纪', '保险代理', '小额贷款', '互联网小额贷', '典当行', '投资管理', '股权基金', '资产管理', '私募牌照', '其他'],
            "pageurl" => ['equity-lease', 'equity-factor', 'equity-broker', 'equity-agency', 'equity-loan', 'equity-itloan', 'equity-pawn', 'equity-invest', 'equity-equity', 'equity-assets', 'equity-private', 'equity-other']
        );
        $agency = array(
            "id"      => 'agency',
            "name"    => '财务代理',
            "open"    => false,
            "pages"   => ['上海财务代理', '深圳财务代理', '浙江财务代理'],
            "pageurl" => ['agency', 'agency', 'agency']
        );
        $appro = array(
            "id"      => 'appro',
            "name"    => '专项审批',
            "open"    => false,
            "pages"   => ['酒类商品批发许可证', '道路运输许可证', '食品经营许可证', '医疗器械许可证', '危险化学品经营许可证', '进出口权', '互联网药品信息服务资格证', '私募基金备案', '境外投资备案'],
            "pageurl" => ['appro-alcohol', 'appro-road', 'appro-food', 'appro-medical', 'appro-chemistry', 'appro-export', 'appro-Internet', 'appro-private', 'appro-foreign'] 
        );
        $card = array(
            "id"      => 'card',
            "name"    => '增值电信办理',
            "open"    => false,
            "pages"   => ['互联网接入服务业务（ISP）', '因特网数据中心业务（IDC）', '国内因特网虚拟专用网业务（IP-VPN)', '国内多方通信服务业务', '在线数据处理与交易业务（EDI）', '存储转发类业务', '呼叫中心业务', '因特网信息服务业务（ICP）','移动网信息服务业务（SP）'],
            "pageurl" => ['card-it', 'card-idc', 'card-vpn', 'card-inland', 'card-edi', 'card-storage', 'card-center', 'card-icp', 'card-sp']
        );

        $params = array(
            'status' => true,
            'data'   => [$company, $tax, $equity, $agency, $appro, $card]
        );
        return json($params);
    }
}

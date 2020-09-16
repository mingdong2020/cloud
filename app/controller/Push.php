<?php
namespace app\controller;

use app\BaseController;

class Push extends BaseController
{
    public function baidu()
    {
        $urls = array(
            'http://mdtzzx.com/',
            'http://mdtzzx.com/account/',
            'http://mdtzzx.com/garden/',
            'http://mdtzzx.com/mitax/',
            'http://mdtzzx.com/steamer/',
            'http://mdtzzx.com/equity/',
            'http://mdtzzx.com/about/',
            'http://mdtzzx.com/email/',
            'http://www.mdtzzx.com/',
            'http://www.mdtzzx.com/account/',
            'http://www.mdtzzx.com/garden/',
            'http://www.mdtzzx.com/mitax/',
            'http://www.mdtzzx.com/steamer/',
            'http://www.mdtzzx.com/equity/',
            'http://www.mdtzzx.com/about/',
            'http://www.mdtzzx.com/email/'
        );
        $api = 'http://data.zz.baidu.com/urls?site=mdtzzx.com&token=1lLlPY327pClIlk9';
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        echo $result;
    }
}

<?php
namespace app\controller;

use app\BaseController;

class Record extends BaseController
{
    public function index()
    {
        $data = array(
            'localhost' => '0-4-1-1',
            'ishuichou.com' => '0-1-1-1',
            'mingdongtouzizixun.net' => '0-1-1-1',
            'ishuichou.cn' => '0-1-1-1',
            'ishuichou.net' => '0-1-1-1',
            'i-shuichou.com' => '0-1-1-1',
            'mingdong.net.cn' => '0-1-1-1',
            'mingdongtouzi.com' => '0-1-1-1',
            'mingdongtouzi.net' => '0-1-1-1',
            'mingdongzixun.com' => '0-1-1-1',
            'mdzimaoqu.com' => '0-1-1-1',
            'mdtzzx.net' => '0-1-1-1',
            'mingdongtouzizixun.cn' => '0-1-1-1',
            'zimaoquzixun.cn' => '0-1-1-1',
            'zimaoquzixun.com' => '0-1-1-1',
            'mdqygl.cn' => '0-1-1-1',
            'shmdzc.cn' => '0-1-1-1',
            'shmdzc.com' => '0-1-1-1',
            'e-zhuxiao.com' => '0-1-1-1',
            'i-shuichou.cn' => '0-1-1-1',
            'i-shuichou.net' => '0-1-1-1',
            'zimaoquzhuce.net' => '0-1-1-1',
            'mingdongzixun.cn' => '0-1-1-1',
            'mingdongtouzi.cn' => '0-1-1-1',
            'mingdongzixun.net' => '0-1-1-1',
            'mingdongtouzizixun.com' => '0-1-1-1',
            'nttzzx.cn' => '0-4-4-2',
            'nttzgl.cn' => '0-4-4-2',
            'ntzxzx.com' => '0-4-4-2',
            'nttzzx.com' => '0-4-4-2',
            'qianhaizhuce.cn' => '0-4-4-2',
            'chinazmq.cn' => '1-3-3-3',
            'rongzizulinzhuce.com' => '1-3-3-3',
            'zmqzx.net' => '0-2-2-4',
            'rongzizulinzhuce.cn' => '0-2-2-4',
            'syblzc.com' => '0-2-2-4',
            'syblzc.cn' => '0-2-2-4',
            'zmqqbjd.com' => '0-2-2-4',
            'ftzflc.com' => '0-2-2-4',
            'ftzzc.net' => '0-2-2-4'
         );
         $params = array(
            'status' => true,
            'data'   => $data
        );
        return json($params);
    }
}

<?php
namespace app\controller;
use app\BaseController;
use think\Request;

class Email extends BaseController
{
    public function send(Request $request)
    {
        $data = [
            'id' => $request->param('id'),
            'name' => $request->param('name')
        ];
        $result = ['data' => $data, 'status' => true];
        return json($result);
    }
}

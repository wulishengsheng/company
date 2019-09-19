<?php
namespace app\index\controller;
use think\Ftp;
use think\Db;
class Index
{
    public function index()
    {
      	$aa = new Ftp();
	    $data['server'] = '103.80.135.97';//服务器地址(IP or domain)
		$data['username'] = 'sige';//ftp帐户
		$data['password'] = 'sige';//ftp密码
		$data['port'] = 21;//ftp端口,默认为21
		$data['pasv'] = false;//是否开启被动模式,true开启,默认不开启
		$data['ssl'] = false;//ssl连接,默认不开启
		$data['timeout'] = 60;//超时时间,默认60,单位 s
	    var_dump($aa->start($data));die;
    }
}

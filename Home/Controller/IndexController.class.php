<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller 
{
    public function index(){
        echo '111111';
    }
    public function _empty()
    {
        echo '服务器繁忙';
    }
}

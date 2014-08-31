<?php
namespace Home\Controller;

use Think\Controller;

class GoodsController extends Controller 
{
    public function showList()
    {
        $this->display();
    }

    public function detail()
    {
        $this->display();
    }

    public function _empty()
    {
        echo '服务器繁忙';
    }
}

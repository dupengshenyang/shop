<?php

namespace Home\Controller;

use Think\Controller;

class EmptyController extends Controller
{
    public function _empty()
    {
        echo '服务器繁忙';
    }
}

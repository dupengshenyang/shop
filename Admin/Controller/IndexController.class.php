<?php 
namespace Admin\Controller;

use Think\Controller;
class IndexController extends controller
{
    function index()
    {
        $this->display();
    }

    function head()
    {
        $this->display();
    }

    function left()
    {
        $this->display();
    }

    function right()
    {
       // var_dump(get_defined_constants());
        $this->display();
    }
}
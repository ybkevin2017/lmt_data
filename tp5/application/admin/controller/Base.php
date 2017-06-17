<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{   
     /**
     * 后台控制器初始化
     */
    protected function _initialize(){
        // 获取当前用户ID
        if(defined('UID')) return ;
            define('UID',is_login());
        if( !UID ){
            $this->redirect('Login/login');
        }
    }

}

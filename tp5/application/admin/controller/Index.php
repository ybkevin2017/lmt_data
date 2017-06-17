<?php

namespace app\admin\controller;
use app\admin\controller\Base;
class Index extends Base
{
	/**
	 * 系统后台首页
	 * @return #
	 * @author yangbing @create_at 2017-05-02T19:19:46+0800
	 */
    public function index(){
    	$this->assign('cate','');
        return $this->fetch();
    }



}

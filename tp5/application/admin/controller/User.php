<?php

namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Member as MemberModel;

class User extends Base{
	/**
	 * 用户列表
	 * @return #
	 * @author yangbing @create_at 2017-05-02T19:19:46+0800
	 */
    public function index(){
    	$model= new MemberModel();
    	$list = MemberModel::paginate(3);
 		$this->assign('_list',$list);
    	$this->assign('cate',input('cate'));
        return $this->fetch();
    }

    /**
     * 已删除会员
     * @return #
     * @author yangbing @create_at 2017-05-03T18:17:44+0800
     */
    public function user_list_del(){

    	$this->assign('cate',input('cate'));
        return $this->fetch();
    }

    /**
     * 添加会员
     * @author yangbing @create_at 2017-05-03T18:35:04+0800
     */
    public function add(){

    	$this->assign('title','index');
    	$this->assign('cate','user_index');
    	return $this->fetch();
    }

}

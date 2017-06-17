<?php

// +----------------------------------------------------------------------
// | tp5系统(demo)
// +----------------------------------------------------------------------
// | @Author: yangbing <285057880@qq.com>
// +----------------------------------------------------------------------

namespace app\Admin\controller;
use think\Controller;
use app\admin\model\Member;

/**
 * 后台登陆
 * @author yangbing @create_at 2017-05-03
 */
class Login extends Controller
{
    /**
     * 后台用户登陆
     * @param  $username 用户名
     * @param  $password 密码
     * @param  $verify   验证码
     * @return json 
     * @author yangbing @create_at 2017-05-03T09:14:54+0800
     */
    public function login($username = null, $password = null, $verify = null){
        if(request()->isPost()){
            /* 检测验证码 TODO: */
            if(!captcha_check($verify)){
                return json(['info'=>'验证码输入错误！','status'=>0]);
            }
            $member_model = new Member();
            $data['username'] =  $username;
            $data['password'] =  $password;
            $no = $member_model->login( $data );
            if( 0 < $no ){
                return json(['info'=>'登录成功！','status'=>1,'url'=>'login']);
            }else{
                switch($no) {
                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
                    case -2: $error = '密码错误！'; break;
                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
                }
                return json(['info'=>$error,'status'=>0]);
            }
        } else {
            if(is_login()){
                $this->redirect('Index/index');
            }else{
                /* 自动处理后台添加的配置 */
                //api('Config/auto_lists');
                return $this->fetch('login');
            }
        }
    }

    /* 退出登录 */
    public function logout(){
        if(is_login()){
            $member_model = new Member();
            $member_model->logout();
            session('[destroy]');
            $this->success('退出成功！', 'Login/login');
        } else {
            $this->redirect('login');
        }
    }

}

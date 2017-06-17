<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Member extends Model
{
	/**
	 * 用户登陆
	 * @param  $data 登陆用户信息数组
	 * @return integer 
	 * @author yangbing @create_at 2017-05-03T10:06:04+0800
	 */
	public function login($data){
		$user = Db::name('Member')->where('username','=',$data['username'])->find();
		if($user){
			if($user['password'] == md5($data['password'])){

				$this->auto_login($user);
				return 1; //信息正确
			}else{
				return -2; //密码错误
			}
		}else{
			return -1; //用户不存在或已被禁用
		}
	}

	/**
     * 自动登录用户
     * @param  integer $user 用户信息数组
     */
    private function auto_login($user)
    {
        /* 更新登录信息 */
        $data = [
        	'login'           => ['exp', '`login`+1'],
        	'last_login_time' => time(),
            // 'last_login_ip'   => get_client_ip(),
        ];
        $this->save($data,['id' => $user['id'] ]);

        /* 记录登录SESSION和COOKIES */
        $auth = [
            'id'              => $user['id'],
            'username'        => $user['nickname'],
            'last_login_time' => $user['last_login_time'],
        ];
        session('user_auth', $auth);
        session('user_auth_sign', data_auth_sign($auth));

    }

    /**
     * 注销当前用户
     * @return void
     */
    public function logout()
    {
        session('user_auth', null);
        session('user_auth_sign', null);
    }
}

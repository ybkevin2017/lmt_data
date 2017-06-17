<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\user\add.htm";i:1493812567;s:77:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\public\head.htm";i:1493799820;s:77:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\public\base.htm";i:1493810132;s:79:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\public\footer.htm";i:1493802277;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<title>
    后台管理系统
</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="__CSS__/x-admin.css" media="all">
    </head>
    <body>
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header header header-demo">
    <div class="layui-main">
        <a class="logo" href="<?php echo url('Index/index'); ?>">
           后台管理系统
        </a>
        <ul class="layui-nav" lay-filter="">
            <li class="layui-nav-item">
                <img src="__IMG__/admin-default.jpg" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt="">
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><?php echo session('user_auth.username'); ?></a>
                <dl class="layui-nav-child"> <!-- 二级菜单 -->
                    <dd><a href="<?php echo url('Login/logout'); ?>">退出登陆</a></dd>
                    <dd><a href="">修改密码</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</div>

<div class="layui-side layui-bg-black x-side">
    <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
            <!-- <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite>问题管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./question-list.html">
                                <cite>问题列表</cite>
                            </a>
                        </dd>
                    </dd>
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./question-del.html">
                                <cite>删除问题</cite>
                            </a>
                        </dd>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe62d;</i><cite>产品管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./welcome.html">
                                <cite>产品列表（待开发）</cite>
                            </a>
                        </dd>
                    </dd>
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./welcome.html">
                                <cite>品牌管理（待开发）</cite>
                            </a>
                        </dd>
                    </dd>
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./welcome.html">
                                <cite>类型管理（待开发）</cite>
                            </a>
                        </dd>
                    </dd>
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./welcome.html">
                                <cite>类型属性（待开发）</cite>
                            </a>
                        </dd>
                    </dd>
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./category.html">
                                <cite>产品分类</cite>
                            </a>
                        </dd>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./banner-list.html">
                                <cite>轮播列表</cite>
                            </a>
                        </dd>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe642;</i><cite>订单管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./welcome.html">
                                <cite>订单列表（待开发）</cite>
                            </a>
                        </dd>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>分类管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:;" _href="./category.html">
                            <cite>分类列表</cite>
                        </a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe606;</i><cite>评论管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:;" _href="./comment-list.html">
                            <cite>评论列表</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./feedback-list.html">
                            <cite>意见反馈</cite>
                        </a>
                    </dd>
                </dl>
            </li> -->
           
            <?php if(in_array(($cate), explode(',',"User,user_index,user_list_del"))): ?>
               <li class="layui-nav-item layui-nav-itemed">
            <?php else: ?>
                <li class="layui-nav-item">
            <?php endif; ?>
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe612;</i><cite>会员管理</cite>
                </a>
                <dl class="layui-nav-child">

                    <dd <?php if($cate == 'user_index'): ?>class="layui-this"<?php endif; ?> >
                        <a href="<?php echo url('User/index',array('cate'=>'user_index')); ?>" _href="">
                            <cite>会员列表</cite>
                        </a>
                    </dd>

                    <dd <?php if($cate == 'user_list_del'): ?>class="layui-this"<?php endif; ?> >
                        <a href="<?php echo url('User/user_list_del',array('cate'=>'user_list_del')); ?>" _href="">
                            <cite>删除会员</cite>
                        </a>
                    </dd>

                    <dd class="">
                        <a href="javascript:;" _href="./member-level.html">
                            <cite>等级管理</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./member-kiss.html">
                            <cite>积分管理</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./member-view.html">
                            <cite>浏览记录</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./member-view.html">
                            <cite>分享记录</cite>
                        </a>
                    </dd>
                </dl>
            </li>


            <?php if(in_array(($cate), explode(',',"admin_index"))): ?>
               <li class="layui-nav-item layui-nav-itemed">
            <?php else: ?>
                <li class="layui-nav-item">
            <?php endif; ?>
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe613;</i><cite>管理员管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd <?php if($cate == 'admin_index'): ?>class="layui-this"<?php endif; ?>>
                        <a href="#" _href="">
                            <cite>管理员列表</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./admin-role.html">
                            <cite>角色管理</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./admin-cate.html">
                            <cite>权限分类</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./admin-rule.html">
                            <cite>权限管理</cite>
                        </a>
                    </dd>
                </dl>
            </li>
            <!-- <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe629;</i><cite>系统统计</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:;" _href="./echarts1.html">
                            <cite>拆线图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./echarts2.html">
                            <cite>柱状图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./echarts3.html">
                            <cite>地图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./echarts4.html">
                            <cite>饼图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./echarts5.html">
                            <cite>雷达图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./echarts6.html">
                            <cite>k线图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./echarts7.html">
                            <cite>热力图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./echarts8.html">
                            <cite>仪表图</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="http://echarts.baidu.com/examples.html" target="_blank" _href="./welcome.html">
                            <cite>更多案例</cite>
                        </a>
                    </dd>
                </dl>
            </li> -->
            <!-- <li class="layui-nav-item">
                <a class="javascript:;" href="javascript:;">
                    <i class="layui-icon" style="top: 3px;">&#xe614;</i><cite>系统设置</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:;" _href="./sys-set.html">
                            <cite>系统设置</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./sys-data.html">
                            <cite>数字字典</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./sys-shield.html">
                            <cite>屏蔽词</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./sys-log.html">
                            <cite>系统日志</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./sys-link.html">
                            <cite>友情链接</cite>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:;" _href="./sys-qq.html">
                            <cite>第三方登录</cite>
                        </a>
                    </dd>
                </dl>
            </li> -->
            <li class="layui-nav-item" style="height: 30px; text-align: center">
            </li>
        </ul>
    </div>

</div> 
            <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true">
                <div class="x-body">
                	<div class="content-titil" style="font-size: 22px;">
                		标题
                	</div>
                	
		            <form class="layui-form style-form">
		                <div class="layui-form-item">
		                    <label for="L_email" class="layui-form-label">
		                        <span class="x-red">*</span>邮箱
		                    </label>
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="email" required="" lay-verify="email"
		                        autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        <span class="x-red">*</span>将会成为您唯一的登入名
		                    </div>
		                </div>
		                <div class="layui-form-item">
		                    <label for="L_username" class="layui-form-label">
		                        <span class="x-red">*</span>昵称
		                    </label>
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_username" name="username" required="" lay-verify="nikename"
		                        autocomplete="off" class="layui-input">
		                    </div>
		                </div>
		                <div class="layui-form-item">
		                    <label for="L_pass" class="layui-form-label">
		                        <span class="x-red">*</span>密码
		                    </label>
		                    <div class="layui-input-inline">
		                        <input type="password" id="L_pass" name="pass" required="" lay-verify="pass"
		                        autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        6到16个字符
		                    </div>
		                </div>
		                <div class="layui-form-item">
		                    <label for="L_repass" class="layui-form-label">
		                        <span class="x-red">*</span>确认密码
		                    </label>
		                    <div class="layui-input-inline">
		                        <input type="password" id="L_repass" name="repass" required="" lay-verify="repass"
		                        autocomplete="off" class="layui-input">
		                    </div>
		                </div>
		                <div class="layui-form-item">
		                    <label for="L_repass" class="layui-form-label"></label>

		                    <button lay-filter="add" lay-submit="">确定</button>
		                    <button  class="default-btn" onclick="javascript:history.back(-1);return false;">返回</button>

		                </div>
		            </form>

				</div>	
                    
              
            </div>
           <!--  <div class="site-mobile-shade"></div> -->
        </div>
       <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
<script src="__JS__/x-admin.js"></script>
 
    </body>
</html>
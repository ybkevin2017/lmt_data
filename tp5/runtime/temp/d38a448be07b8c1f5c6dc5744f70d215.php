<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:84:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\user\user_list_del.htm";i:1493807462;s:77:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\public\head.htm";i:1493799820;s:77:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\public\base.htm";i:1493810132;s:79:"D:\WWW\phpStudy\WWW\demo\tp5\public/../application/admin\view\public\footer.htm";i:1493802277;}*/ ?>
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
                <div class="layui-tab-content site-demo site-demo-body">
                    <div class="layui-tab-item layui-show">
                        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>会员删除</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" action="" style="width:800px">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">日期范围</label>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量恢复</button></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            用户名
                        </th>
                        <th>
                            性别
                        </th>
                        <th>
                            手机
                        </th>
                        <th>
                            邮箱
                        </th>
                        <th>
                            地址
                        </th>
                        <th>
                            加入时间
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')">
                                小明
                            </u>
                        </td>
                        <td >
                            男
                        </td>
                        <td >
                            13000000000
                        </td>
                        <td >
                            admin@mail.com
                        </td>
                        <td >
                            北京市 海淀区
                        </td>
                        <td>
                            2017-01-01 11:11:42
                        </td>
                        <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                已启用
                            </span>
                        </td>
                        <td class="td-manage">
                            <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-edit.html','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a style="text-decoration:none"  onclick="member_password('修改密码','member-password.html','10001','600','400')"
                            href="javascript:;" title="修改密码">
                                <i class="layui-icon">&#xe631;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="member_del(this,'1')" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id="page"></div>
        </div>
                        
                    </div>
                </div>
            </div>
            <div class="site-mobile-shade">
            </div>
        </div>



        

       <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
<script src="__JS__/x-admin.js"></script>
 
        <script>
            layui.use(['laydate','element','laypage','layer'], function(){
                $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层

              //以上模块根据需要引入

              laypage({
                cont: 'page'
                ,pages: 100
                ,first: 1
                ,last: 100
                ,prev: '<em><<</em>'
                ,next: '<em>>></em>'
              }); 
              
              var start = {
                min: laydate.now()
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  end.min = datas; //开始日选好后，重置结束日的最小日期
                  end.start = datas //将结束日的初始值设定为开始日
                }
              };
              
              var end = {
                min: laydate.now()
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  start.max = datas; //结束日选好后，重置开始日的最大日期
                }
              };
              
              document.getElementById('LAY_demorange_s').onclick = function(){
                start.elem = this;
                laydate(start);
              }
              document.getElementById('LAY_demorange_e').onclick = function(){
                end.elem = this
                laydate(end);
              }
              
            });

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }
             /*用户-添加*/
            function member_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }
            /*用户-查看*/
            function member_show(title,url,id,w,h){
                x_admin_show(title,url,w,h);
            }

             /*用户-停用*/
            function member_stop(obj,id){
                layer.confirm('确认要停用吗？',function(index){
                    //发异步把用户状态进行更改
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!',{icon: 5,time:1000});
                });
            }

            /*用户-启用*/
            function member_start(obj,id){
                layer.confirm('确认要启用吗？',function(index){
                    //发异步把用户状态进行更改
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!',{icon: 6,time:1000});
                });
            }
            // 用户-编辑
            function member_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            /*密码-修改*/
            function member_password(title,url,id,w,h){
                x_admin_show(title,url,w,h);  
            }
            /*用户-删除*/
            function member_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
            </script>
            <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
        
    </body>
</html>
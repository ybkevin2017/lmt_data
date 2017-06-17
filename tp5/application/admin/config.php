<?php
return [

   'view_replace_str'  =>  [
        '__STATIC__' => SITE_URL . '/public/static/common',
        '__CSS__' => SITE_URL . '/public/static/admin/css',
        '__IMG__' => SITE_URL . '/public/static/admin/images',
        '__JS__' => SITE_URL . '/public/static/admin/js',
    ],

    //默认错误跳转对应的模板文件
   // 'dispatch_error_tmpl' => 'public/error',
	'dispatch_error_tmpl' => APP_PATH . 'admin/view/login/error.htm',
	//默认成功跳转对应的模板文件
	'dispatch_success_tmpl' => APP_PATH . 'admin/view/login/success.htm',

    'template'               => [
        // 模板后缀
        'view_suffix'  => 'htm',
    ],

    'captcha'  => [
        // 验证码字符集合
        'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY', 
        // 验证码字体大小(px)
        'fontSize' => 26, 
        // 是否画混淆曲线
        'useCurve' => false, 
         // 验证码图片高度
        'imageH'   => 50,
        // 验证码图片宽度
        'imageW'   => 220, 
        // 验证码位数
        'length'   => 5, 
        // 验证成功后是否重置        
        'reset'    => true
    ],
    
];

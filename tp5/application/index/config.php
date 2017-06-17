<?php
return [
   // 'view_replace_str'  =>  [
   //  '__PUBLIC__'=>SITE_URL.'/public/static/index',
   //  '__IMG__'=>SITE_URL.'/public/static',
   //  ],

    'view_replace_str'  =>  [
        '__STATIC__' => SITE_URL . '/public/static',
        '__CSS__' => SITE_URL . '/public/index/css',
        '__IMG__' => SITE_URL . '/public/index/images',
        '__JS__' => SITE_URL . '/public/index/js',
    ],
];

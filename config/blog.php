<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    // Color Theme
    'color_theme' => 'default-theme',

    // Meta
    'meta' => [
        'keywords' => 'NoobMan Blog,blog,noobman',
        'description' => '我不知道将去何方，但我已在路上。'
    ],

    // Social Share
    'social_share' => [
        'article_share'    => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites'            => env('SOCIAL_SHARE_SITES') ?: 'google,twitter,weibo',
        'mobile_sites'     => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'google,twitter,weibo,qq,wechat',
    ],

    // Google Analytics
    'google' => [
        'id'   => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN') ?: false
    ],

    // Article Page
    'article' => [
        'title'       => env('ARTICLE_TITLE','我不知道将去何方，但我已在路上。'),
        'description' => 'https://blog.noobman.com',
        'number'      => 15,
        'sort'        => 'desc',
        'sortColumn'  => 'published_at',
    ],

    // Discussion Page
    'discussion' => [
        'number' => 20,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        /*
        'github' => [
            'open' => true,
            'url'  => 'https://github.com/jcc',
        ],
        'twitter' => [
            'open' => true,
            'url'  => 'https://twitter.com/pigjian'
        ],
        */
        'meta' => '© NoobMan Blog 2018. Powered By Jiajian Chan <a href="http://www.miitbeian.gov.cn/">京ICP备17015150号-1</a></span>',
    ],

    'license' => 'Powered By Noob Man.<br/>版权声明：<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/deed.zh">署名-非商业性使用 4.0 国际 (CC BY-NC 4.0)</a>',

];

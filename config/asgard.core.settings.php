<?php

return [
    'default-timezone' => [
        'description' => 'core::settings.default-timezone',
        'view' => 'core::fields.select-timezone',
        'translatable' => false,
        'check_access'=>'setting.settings.isSuperAdmin',
        'default'=>'Asia/Singapore',
    ],
    'convert-user-timezone' => [
        'description' => 'core::settings.convert-user-timezone',
        'view' => 'core::fields.convert-user-timezone',
        'translatable' => false,
        'check_access'=>'setting.settings.isSuperAdmin',
    ],
    'site-name' => [
        'description' => 'core::settings.site-name',
        'view' => 'text',
        'translatable' => true,
        'default'=>'CentroidCMS',
    ],
    'site-description' => [
        'description' => 'core::settings.site-description',
        'view' => 'textarea',
        'translatable' => true,
    ],
//    'template' => [
//        'description' => 'core::settings.template',
//        'view' => 'core::fields.select-theme',
//        'default'=>'Flatly'
//    ],
//    'google-analytics' => [
//        'description' => 'core::settings.google-analytics',
//        'view' => 'textarea',
//        'translatable' => false,
//    ],
    'locales' => [
        'description' => 'core::settings.locales',
        'view' => 'core::fields.select-locales',
        'translatable' => false,
    ],
];

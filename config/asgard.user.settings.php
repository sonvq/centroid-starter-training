<?php
/**
 * Created by PhpStorm.
 * User: nguyentantam
 * Date: 12/30/15
 * Time: 3:20 PM
 */

return [
    'handle_method_register_with_api_request' => [
        'description' => 'user::settings.handle_method_register_with_api_request',
        'view' => 'user::settings.handle-method-register-with-api-request',
        'default'=>'active_by_confirm_url',
        'translatable' => false,
    ],
    'user-default-roles'=>[
        'description' => 'user::settings.user role default',
        'view' => 'user::settings.user-role-default',
        'default'=>'guest',
        'translatable' => false,
    ]
];
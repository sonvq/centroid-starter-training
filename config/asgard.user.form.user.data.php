<?php

return [
    'create'=>[
        'first_name'=>[
            'type'=>'text',
            'optional'=>[
                'template' => 'user::fields.custom',
                'optionWrapper' => [
                    ['class' => 'col-sm-12']
                ],
                'default_value' => null, // Fallback value if none provided by value property or model
                'label' => 'user::users.form.first-name', // Field name used
            ]
        ],
        'last_name'=>[
            'type'=>'text',
            'optional'=>[
                'template' => 'user::fields.custom',
                'optionWrapper' => [
                    ['class' => 'col-sm-12']
                ],
                'default_value' => null, // Fallback value if none provided by value property or model
                'label' => ('user::users.form.last-name'), // Field name used
            ]
        ],
        'email'=>[
            'type'=>'text',
            'optional'=>[
                'template' => 'user::fields.custom',
                'optionWrapper' => [
                    ['class' => 'col-sm-12']
                ],
                'default_value' => null, // Fallback value if none provided by value property or model
                'label' => ('user::users.form.email'), // Field name used
            ]
        ],
        'username'=>[
            'type'=>'text',
            'optional'=>[
                'template' => 'user::fields.custom',
                'optionWrapper' => [
                    ['class' => 'col-sm-12']
                ],
                'default_value' => null, // Fallback value if none provided by value property or model
                'label' => ('user::users.form.username'), // Field name used
            ]
        ],
        'password'=>[
            'type'=>'password',
            'optional'=>[
                'template' => 'user::fields.custom',
                'optionWrapper' => [
                    ['class' => 'col-sm-12']
                ],
                'default_value' => null, // Fallback value if none provided by value property or model
                'label' => ('user::users.form.password'), // Field name used
            ]
        ],
        'password_confirmation'=>[
            'type'=>'password',
            'optional'=>[
                'template' => 'user::fields.custom',
                'optionWrapper' => [
                    ['class' => 'col-sm-12']
                ],
                'default_value' => null, // Fallback value if none provided by value property or model
                'label' => ('user::users.form.password-confirmation'), // Field name used
            ]
        ],
        'phone_number'=>[
            'type'=>'text',
            'optional'=>[
                'optionWrapper' => [
                    ['class' => 'col-sm-12']
                ],
                'template' => 'user::fields.custom',
                'label' => ('user::users.form.phone_number'),
            ]
        ],
        'country_id'=>[
            'type'=>'choice',
            'optional'=>[
                'optionWrapper' => [
                    ['class' => 'clearfix']
                ],
                'wrapper' => ['class' => ' col-md-6 '],
                'label' => ('user::users.form.country'), // Field name used
                'choices'=>function(){
                    return app('Modules\Location\Repositories\CountryRepository')->getAllCountriesAsArray();
                },
                'empty_value' => 'Select country',
                'template' => 'user::fields.custom',
                'multiple' => false,
            ]
        ],
        'timezone_id'=>[
            'type'=>'choice',
            'optional'=>[
                'optionWrapper' => [
                    ['class' => 'clearfix']
                ],
                'wrapper' => ['class' => ' col-md-6 '],
                'label' => ('user::users.form.timezone'), // Field name used
                'choices'=>function(){
                    return app('Modules\Location\Repositories\TimezoneRepository')->getAllTimezonesAsArray();
                },
                'empty_value' => 'Select timezone',
                'template' => 'user::fields.custom',
                'multiple' => false,
            ]
        ],
        'status'=>[
            'type'=>'choice',
            'optional'=>[
                'optionWrapper' => [
                    ['class' => 'clearfix']
                ],
                'wrapper' => ['class' => ' col-md-6 '],
                'label' => ('user::users.form.status'), // Field name used
                'choices'=>function(){
                    return config('asgard.user.user_status.status');
                },
                'template' => 'user::fields.custom',
                'multiple' => false,
            ]
        ]
    ],
];
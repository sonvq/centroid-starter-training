<?php
/**
 * Created by PhpStorm.
 * User: nguyentantam
 * Date: 1/14/16
 * Time: 1:44 PM
 */

return [
    'user' => [
        'first_name' => [
            'column_name' => 'first_name',
            'filter_input' => [
                'type' => 'text',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'First name',
                    ],
                ],
            ],
            'filter_type' => 'LIKE',
        ],
        'last_name' => [
            'column_name' => 'last_name',
            'filter_input' => [
                'type' => 'text',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Last name',
                    ],
                ],
            ],
            'filter_type' => 'LIKE',
        ],
        'email' => [
            'column_name' => 'email',
            'filter_input' => [
                'type' => 'text',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Email',
                    ],
                ],
            ],
            'filter_type' => 'LIKE',
        ],
        'status' => [
            'column_name' => 'status',
            'filter_input' => [
                'type' => 'choice',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Status',
                    ],
                    'choices' => function(){
                        return config('asgard.user.user_status.status');
                    },
                ],
            ],
            'filter_type' => '=',
        ],
        'role' => [
            'column_name' => 'status',
            'filter_input' => [
                'type' => 'choice',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Roles',
                    ],
                    'choices' => function(){
                        return app('Modules\User\Repositories\RoleRepository')->all()->pluck('name','id')->toArray();
                    },
//                    'empty_value'=>'Roles',
                ],
            ],
            'filter_type' => 'CUSTOM',
            'filter_function'=>function($query){
                $filter  = Request::get('advance_filter');
                $role_id = array_get($filter,'role');
                if($role_id){
                    $query = $query->whereHas('roles',function($q)use($role_id){
                        $q->where('id',$role_id);
                    });
                }
                return $query;
            },
        ],
    ],
    'group' => [
        'title' => [
            'column_name' => 'title',
            'filter_input' => [
                'type' => 'text',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Title',
                    ],
                ],
            ],
            'filter_type' => 'LIKE',
        ],
        'unique_name' => [
            'column_name' => 'name',
            'filter_input' => [
                'type' => 'text',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Unique Name',
                    ],
                ],
            ],
            'filter_type' => 'LIKE',
        ],
        'description' => [
            'column_name' => 'description',
            'filter_input' => [
                'type' => 'text',
                'optional' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Description',
                    ],
                ],
            ],
            'filter_type' => 'LIKE',
        ],
    ]
];
<?php
return [
    'user' => [
        'checkbox'=>[
            'name' => 'select_all',
            'type'=>'checkbox',
            'show_hide_title' => 'Checkbox',
        ],
        'id' => [
            'name' => 'id',
            'title' => 'Id'
        ],
        'first_name' => [
            'name' => 'first_name',
            'title' => 'First Name'
        ],
        'last_name' => [
            'name' => 'last_name',
            'title' => 'Last Name'
        ],
        'email' => [
            'name' => 'email',
            'title' => 'Email'
        ],
        'status' => [
            'name' => 'status',
            'title' => 'Status',
            'editColumn'=>function($obj){
                return config("asgard.user.user_status.status.".$obj->status);
            },
        ],
        'roles' => [
            'name' => 'roles',
            'title' => 'Roles',
            'selectAble' => false,
            'with' => ['roles'],
            'editColumn' => function ($obj) {
                if ($obj->roles) {
                    if($data = $obj->roles->lists('name')->toArray()){
                        return HTML::ul($data)->toHtml();
                    }
                }
                return '';
            },
        ],
        'updated_at' => [
            'name' => 'updated_at',
            'title' => 'Updated At'
        ],
        'action'=>[
            'name'=>'action',
            'title'=>'Action',
            'selectAble'=>false,
            'editColumn'=>function($obj){
                $config = array (
                    'buttons' =>
                        array (
                            'edit' =>
                                array (
                                    'class_a' => 'btn btn-default btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-pencil"></i>',
                                    'route_name' => 'admin.user.user.edit',
                                ),
                            'delete' =>
                                array (
                                    'class_a' => 'btn btn-danger btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-trash"></i>',
                                    'route_name' => 'admin.user.user.destroy',
                                ),
                        ),
                );
                return view('core::datatables.buttons',compact("config","obj"))->render() ;
            },
        ]
    ],
    'backend_user' => [
        'id' => [
            'name' => 'id',
            'title' => 'Id'
        ],
        'first_name' => [
            'name' => 'first_name',
            'title' => 'First Name'
        ],
        'last_name' => [
            'name' => 'last_name',
            'title' => 'Last Name'
        ],
        'email' => [
            'name' => 'email',
            'title' => 'Email'
        ],
        'status' => [
            'name' => 'status',
            'title' => 'Status',
            'editColumn'=>function($obj){
                return config("asgard.user.user_status.status.".$obj->status);
            },
        ],
        'roles' => [
            'name' => 'roles',
            'title' => 'Roles',
            'selectAble' => false,
            'with' => ['roles'],
            'editColumn' => function ($obj) {
                if ($obj->roles && $data = $obj->roles->lists('name')->toArray()) {
                    return HTML::ul($data)->toHtml();
                } else {
                    return '';
                }
            },
        ],
        'created_at' => [
            'name' => 'created_at',
            'title' => 'Created At',
            'editColumn' => function ($obj) {
                return $obj->created_at->format('Y/m/d');
            },
        ],
        'updated_at' => [
            'name' => 'updated_at',
            'title' => 'Updated At',
            'editColumn' => function ($obj) {
                return $obj->updated_at->format('Y/m/d');
            },
        ],
        'action'=>[
            'name'=>'action',
            'title'=>'Action',
            'selectAble'=>false,
            'editColumn'=>function($obj){
                $config = array (
                    'buttons' =>
                        array (
                            'edit' =>
                                array (
                                    'class_a' => 'btn btn-default btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-pencil"></i>',
                                    'route_name' => 'admin.user.user.edit',
                                ),
                            'delete' =>
                                array (
                                    'class_a' => 'btn btn-danger btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-trash"></i>',
                                    'route_name' => 'admin.user.user.destroy',
                                ),
                        ),
                );
                return view('core::datatables.buttons',compact("config","obj"))->render() ;
            },
        ]
    ],
    'api_user' => [
        'id' => [
            'name' => 'id',
            'title' => 'Id'
        ],
        'first_name' => [
            'name' => 'first_name',
            'title' => 'First Name'
        ],
        'last_name' => [
            'name' => 'last_name',
            'title' => 'Last Name'
        ],
        'email' => [
            'name' => 'email',
            'title' => 'Email'
        ],
        'status' => [
            'name' => 'status',
            'title' => 'Status',
            'editColumn'=>function($obj){
                return config("asgard.user.user_status.status.".$obj->status);
            },
        ],
        'roles' => [
            'name' => 'roles',
            'title' => 'Roles',
            'selectAble' => false,
            'with' => ['roles'],
            'editColumn' => function ($obj) {
                if ($obj->roles && $data = $obj->roles->lists('name')->toArray()) {
                    return HTML::ul($data)->toHtml();
                } else {
                    return '';
                }
            },
        ],
        'created_at' => [
            'name' => 'created_at',
            'title' => 'Created At',
            'editColumn' => function ($obj) {
                return $obj->created_at->format('Y/m/d');
            },
        ],
        'updated_at' => [
            'name' => 'updated_at',
            'title' => 'Updated At',
            'editColumn' => function ($obj) {
                return $obj->updated_at->format('Y/m/d');
            },
        ],
        'action'=>[
            'name'=>'action',
            'title'=>'Action',
            'selectAble'=>false,
            'editColumn'=>function($obj){
                $config = array (
                    'buttons' =>
                        array (
                            'edit' =>
                                array (
                                    'class_a' => 'btn btn-default btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-pencil"></i>',
                                    'route_name' => 'admin.user.user.edit',
                                ),
                            'delete' =>
                                array (
                                    'class_a' => 'btn btn-danger btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-trash"></i>',
                                    'route_name' => 'admin.user.user.destroy',
                                ),
                        ),
                );
                return view('core::datatables.buttons',compact("config","obj"))->render() ;
            },
        ]
    ],
    'user_ajax' => [
        'id' => [
            'name' => 'id',
            'data' => 'id',
            'title' => 'Id'
        ],
        'first_name' => [
            'name' => 'first_name',
            'data' => 'first_name',
            'title' => 'First Name'
        ],
        'last_name' => [
            'name' => 'last_name',
            'data' => 'last_name',
            'title' => 'Last Name'
        ],
        'email' => [
            'name' => 'email',
            'data' => 'email',
            'title' => 'Email'
        ],
        'created_at' => [
            'name' => 'created_at',
            'data' => 'created_at',
            'title' => 'Created At',
        ],
        'updated_at' => [
            'name' => 'updated_at',
            'data' => 'updated_at',
            'title' => 'Updated At',
        ]
    ],
    'role' => [
        'id' => [
            'name' => 'id',
            'title' => 'Id',
            'orderable'=>false,
        ],
        'slug' => [
            'name' => 'slug',
            'title' => 'Slug',
            'visible'=>false,
        ],
        'name' => [
            'name' => 'name',
            'title' => 'Name',
            'orderable'=>false,
            'editColumn' => function ($obj) {
                return str_repeat('&nbsp;&nbsp;+&nbsp;', $obj->level) . $obj->name;
            }
        ],
        // 'parent_id' => [
        //         'name' => 'parent_id',
        //         'title' => 'Parent'
        //     ],
        'level' => [
            'name' => 'level',
            'orderable'=>false,
            'title' => 'Level'
        ],
        // 'lft' => [
        //         'name' => 'lft',
        //         'title' => 'Left'
        //     ],
        // 'rgt' => [
        //         'name' => 'rgt',
        //         'title' => 'Right'
        //     ],
        'created_at' => [
            'name' => 'created_at',
            'title' => 'Created At',
            'orderable'=>false,
            'editColumn' => function ($obj) {
                return $obj->created_at->format('Y/m/d');
            },
        ],

        'action'=>[
            'name'=>'action',
            'title'=>'Action',
            'selectAble'=>false,
            'editColumn'=>function($obj){
                $config = array (
                    'buttons' =>
                        array (
                            'edit' =>
                                array (
                                    'class_a' => 'btn btn-default btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-pencil"></i>',
                                    'route_name' => 'admin.user.role.edit',
                                ),
                            'delete' =>
                                array (
                                    'class_a' => 'btn btn-danger btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-trash"></i>',
                                    'route_name' => 'admin.user.role.destroy',
                                ),
                        ),
                );

                if($obj->slug == 'super-admin'){
                    unset($config['buttons']['delete']);
                }

                return view('core::datatables.buttons',compact("config","obj"))->render() ;
            },
        ]
    ],
    'group' => [
        'checkbox'=>[
            'name' => 'select_all',
            'type'=>'checkbox',
            'show_hide_title' => 'Checkbox',
        ],
        'id' => [
            'name' => 'id',
            'title' => 'ID',
        ],
        'title' => [
            'name' => 'title',
            'title' => 'Title',
        ],
        'total_member' => [
            'name' => 'id',
            'title' => 'Users',
            'selectAble' => false,
            'with' => ['total_user'],
            'editColumn' => function ($obj) {
                if ($obj->total_user && $obj->total_user->total) {
                    return $obj->total_user->total;
                } else {
                    return 0;
                }
            }
        ],
        'action'=>[
            'name'=>'action',
            'title'=>'Action',
            'selectAble'=>false,
            'editColumn'=>function($obj){
                $config = array (
                    'buttons' =>
                        array (
                            'edit' =>
                                array (
                                    'class_a' => 'btn btn-default btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-pencil"></i>',
                                    'route_name' => 'admin.user.group.edit',
                                ),
                            'delete' =>
                                array (
                                    'class_a' => 'btn btn-danger btn-flat',
                                    'text' => '<i class="glyphicon glyphicon-trash"></i>',
                                    'route_name' => 'admin.user.group.destroy',
                                ),
                        ),
                );
                return view('core::datatables.buttons',compact("config","obj"))->render() ;
            },
        ]
    ],
    'group_user_ajax' => [

        'checkbox'=>[
            'name' => 'select_all',
            'type'=>'checkbox',
            'show_hide_title' => 'Checkbox',
        ],
        'id' => [
            'name' => 'id',
            'data' => 'id',
            'title' => 'Id'
        ],
        'first_name' => [
            'name' => 'first_name',
            'data' => 'first_name',
            'title' => 'First Name'
        ],
        'last_name' => [
            'name' => 'last_name',
            'data' => 'last_name',
            'title' => 'Last Name'
        ],
        'email' => [
            'name' => 'email',
            'data' => 'email',
            'title' => 'Email'
        ]
    ],
    'role_user_ajax' => [
        'checkbox'=>[
            'name' => 'select_all',
            'type'=>'checkbox',
            'show_hide_title' => 'Checkbox',
        ],
        'id' => [
            'name' => 'id',
            'data' => 'id',
            'title' => 'Id'
        ],
        'first_name' => [
            'name' => 'first_name',
            'data' => 'first_name',
            'title' => 'First Name'
        ],
        'last_name' => [
            'name' => 'last_name',
            'data' => 'last_name',
            'title' => 'Last Name'
        ],
        'email' => [
            'name' => 'email',
            'data' => 'email',
            'title' => 'Email'
        ]
    ],
];
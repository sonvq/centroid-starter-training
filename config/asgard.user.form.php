<?php
return [
        'group'=>[
        //group create form data here
        'create'=>[
            'title'=>[
                'type'=>'text',
                'optional'=>[
                    'wrapper'=>['class' => ' col-md-12'],
                    'attr'=>['required'=>true]
                ]
            ],
            'name'=>[
                'type'=>'text',
                'optional'=>[
                    'label'=>'Unique name',
                    'wrapper'=>['class' => ' col-md-12'],
                    'attr'=>['required'=>true],
                    'rules'=>'required|unique:groups,name'
                ]
            ],
            'description'=>[
                'type'=>'textarea',
                'optional'=>[
                    'wrapper'=>['class' => ' col-md-12'],
                    'attr'=>[]
                ]
            ],

        ],
        //group edit form data here
        'edit'=>[
            'title'=>[
                'type'=>'text',
                'optional'=>[
                    'wrapper'=>['class' => ' col-md-12'],
                    'attr'=>['required'=>true]
                ]
            ],
            'name'=>[
                'type'=>'text',
                'optional'=>[
                    'label'=>'Unique name',
                    'wrapper'=>['class' => ' col-md-12'],
                    'attr'=>['required'=>true],
                    'rules'=>function($form){
                        $model = $form->getModel();
                        if($model){
                            return 'required|unique:groups,name'.",".$model->id;
                        }else{
                            return 'required|unique:groups,name';
                        }
                    }
                ]
            ],
            'description'=>[
                'type'=>'textarea',
                'optional'=>[
                    'wrapper'=>['class' => ' col-md-12'],
                    'attr'=>[]
                ]
            ],
        ],
    ],

//add more here
];
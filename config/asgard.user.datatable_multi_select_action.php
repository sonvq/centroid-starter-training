<?php
/**
 * Created by PhpStorm.
 * User: nguyentantam
 * Date: 4/26/16
 * Time: 9:56 AM
 */

return [
    'user'=>[
        'delete'=>[
            'label'=>'Delete',
            'attr'=>[
                'data-message'=>'Do you want to delete selected records?', // post is default
            ],
            'handle'=>function($builder_query){
                $ids = Request::get('id');
                $num_deleted = $builder_query->multiDelete($ids);
                $rs = [];
                $rs['code']=0;
                $rs['message'] = "Deleted ".$num_deleted." success";
                return $rs;
            }
        ],
    ],
    // ITS BASICALLY THE SAME AS USER, BUT WELL ... I JUST NAME IT GENERIC SO IT DOESN'T SOUND LIKE
    // THE ACTION IS ONLY EXCLUSIVE TO THE USER
    'common'=>[
        'delete'=>[
            'label'=>'Delete',
            'attr'=>[
                'data-message'=>'Do you want to delete selected records?', // post is default
            ],
            'handle'=>function($builder_query){
                $ids = Request::get('id');
                $num_deleted = $builder_query->multiDelete($ids);
                $rs = [];
                $rs['code']=0;
                $rs['message'] = "Deleted ".$num_deleted." successfully";
                return $rs;
            }
        ],
    ],
];
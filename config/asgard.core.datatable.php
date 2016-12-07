<?php
return [
	'button_view' => 'core::datatables.buttons',
	'checkbox' => true,
	'buttons' => [
		'edit' => [
        			'class_a' => 'btn btn-default btn-flat',
        			'text' => '<i class="glyphicon glyphicon-pencil"></i>'
        		],
        'delete' => [
        			'class_a' => 'btn btn-danger btn-flat',
        			'text' => '<i class="glyphicon glyphicon-trash"></i>'
        		],
	],
	'show_hide_columns'=>'core::datatables.show_hide_columns',
	'show_hide_columns_scripts'=>'core::datatables.show_hide_columns_scripts',
	'action_buttons'=>'core::datatables.action_buttons',
	'checkbox_id_view'=>'core::datatables.checkbox',
	'advance_script_view'=>'core::datatables.advance_script_view',
];
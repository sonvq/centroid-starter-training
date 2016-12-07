<?php
return [
	'create' => [
		'roles' => [
			'type' => 'choice',
			'optional' => [
                'multiple' => true,
                'label' => ('user::users.tabs.roles'),
				'rules'=>'require',
			]
		]
	]
];
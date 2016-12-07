<?php
return [
	'create' => [
		'groups' => [
			'type' => 'choice',
			'optional' => [
                'multiple' => true,
                'label' => ('user::users.tabs.groups'),
				'rules'=>'require',
			]
		]
	]
];
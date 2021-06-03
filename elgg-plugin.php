<?php

use Pessek\PessekFavicon\Bootstrap;

return [
	'bootstrap' => \Pessek\PessekFavicon\Bootstrap::class,
	'views' => [
		'default' => [
			'favicon_override/' => __DIR__ . '/graphics',
		],
	],
];

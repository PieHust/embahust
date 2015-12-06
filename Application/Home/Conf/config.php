<?php
return array(
	//'配置项'=>'配置值'
	// 'LAYOUT_ON' => true,
	// 'LAYOUT_NAME'=>'home/layout',
	'URL_ROUTE_ON' => true, 
	'URL_ROUTE_RULES' => array(
		'index' => 'index/index',
		'edu/:id\d/:cid\d' => 'index/showedu',
		'tra/:id\d/:cid\d' => 'index/showtra',
		'tea/:id\d/:cid\d' => 'index/showtea',
		'tea/:id\d' => 'index/tealist',
		'edu/:id\d' => 'index/edulist',
		'tra/:id\d'=> 'index/trainlist',
		'news/:id\d/:cid\d' => 'index/shownews',
		'news/:id\d' => 'index/newslist',
		'stu/:id\d' => 'index/stulist',
		'info'	=> 'index/info',
		'entry'	=> 'index/entry',
		'searchcer'	=> 'index/searchcer',
		),

);
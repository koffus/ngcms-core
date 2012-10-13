<?php
// Default PERMISSIONS
$confPerm = array(
// Administrator
'1'	=>	array(
	'nsm'		=> array(
		''		=> array(
			'add'						=> true,
			'list'						=> true,
			'view'						=> true,
			'view.draft'				=> true,
			'view.unpublished'			=> true,
			'view.published'			=> true,
			'modify.draft'				=> true,
			'modify.unpublished'		=> true,
			'modify.published'			=> true,
			'delete.draft'				=> true,
			'delete.unpublished'		=> true,
			'delete.published'			=> true,
		),
	),
	'#admin'	=> array(
		'system'		=> array(
			'admpanel.view'		=> true,
			'lockedsite.view'	=> true,
			'*'					=> true,
		),
		'configuration'	=> array(
			'details'		=> true,
			'modify'		=> true,
			'*'				=> true,
		),
		'cron'	=> array(
			'details'		=> true,
			'modify'		=> true,
			'*'				=> true,
		),
		'news'		=> array(
			'view'						=> true,
			'add'						=> true,
			'add.mainpage'				=> true,
			'add.pinned'				=> true,
			'add.catpinned'				=> true,
			'add.favorite'				=> true,
			'add.html'					=> true,
			'personal.list'				=> true,
			'personal.view'				=> true,
			'personal.modify'			=> true,
			'personal.modify.published'	=> true,
			'personal.publish'			=> true,
			'personal.unpublish'		=> true,
			'personal.delete'			=> true,
			'personal.delete.published'	=> true,
			'personal.html'				=> true,
			'personal.mainpage'			=> true,
			'personal.pinned'			=> true,
			'personal.catpinned'		=> true,
			'personal.favorite'			=> true,
			'personal.setviews'			=> true,
			'personal.multicat'			=> true,
			'personal.nocat'			=> true,
			'personal.customdate'		=> true,
			'personal.altname'			=> true,
			'other.list'				=> true,
			'other.view'				=> true,
			'other.modify'				=> true,
			'other.publish'				=> true,
			'other.unpublish'			=> true,
			'other.modify.published'	=> true,
			'other.delete'				=> true,
			'other.delete.published'	=> true,
			'other.html'				=> true,
			'other.mainpage'			=> true,
			'other.pinned'				=> true,
			'other.catpinned'			=> true,
			'other.favorite'			=> true,
			'other.setviews'			=> true,
			'other.multicat'			=> true,
			'other.nocat'				=> true,
			'other.customdate'			=> true,
			'other.altname'				=> true,
			'*'							=> true,
		),
		'static' => array (
			'view' => true,
			'details' => true,
			'modify' => true,
		),
		'categories'	=> array(
			'view'						=> true,
			'modify'					=> true,
			'details'					=> true,
		),
		'ipban'	=> array(
			'view'						=> true,
			'modify'					=> true,
		),
		'*'			=> array(
			'*'			=> true,
		),
	),
	'*'	=> array(
		'*'		=> array(
			'*'		=> true,
		),
	),
),

// Editor
'2'	=> array(
	'#admin'	=> array(
		'news'		=> array(
			'view'						=> true,
			'add'						=> true,
			'add.mainpage'				=> true,
			'add.pinned'				=> true,
			'add.catpinned'				=> true,
			'add.favorite'				=> false,
			'add.html'					=> false,
			'personal.list'				=> true,
			'personal.view'				=> true,
			'personal.modify'			=> true,
			'personal.modify.published'	=> true,
			'personal.publish'			=> true,
			'personal.unpublish'		=> true,
			'personal.delete'			=> true,
			'personal.delete.published'	=> true,
			'personal.html'				=> false,
			'personal.mainpage'			=> true,
			'personal.pinned'			=> true,
			'personal.catpinned'		=> true,
			'personal.favorite'			=> true,
			'personal.setviews'			=> true,
			'personal.nocat'			=> true,
			'personal.multicat'			=> true,
			'personal.customdate'		=> true,
			'personal.altname'			=> true,
			'other.list'				=> true,
			'other.view'				=> true,
			'other.modify'				=> true,
			'other.publish'				=> true,
			'other.unpublish'			=> true,
			'other.modify.published'	=> true,
			'other.delete'				=> true,
			'other.delete.published'	=> true,
			'other.html'				=> false,
			'other.mainpage'			=> true,
			'other.pinned'				=> true,
			'other.catpinned'			=> true,
			'other.favorite'			=> true,
			'other.setviews'			=> true,
			'other.multicat'			=> true,
			'other.nocat'				=> true,
			'other.customdate'			=> true,
			'other.altname'				=> true,
			'*'							=> false,
		),
		'static' => array (
			'view' => false,
			'details' => false,
			'modify' => false,
		),
		'categories'	=> array(
			'view'						=> true,
			'modify'					=> true,
			'details'					=> true,
		),
		'ipban'	=> array(
			'view'						=> true,
			'modify'					=> true,
		),
	),
),

// Journalist
'3'	=> array(
	'#admin'	=> array(
		'news'		=> array(
			'view'						=> true,
			'add'						=> true,
			'add.mainpage'				=> false,
			'add.pinned'				=> false,
			'add.catpinned'				=> false,
			'add.favorite'				=> false,
			'add.html'					=> false,
			'personal.list'				=> true,
			'personal.view'				=> true,
			'personal.modify'			=> true,
			'personal.modify.published'	=> true,
			'personal.publish'			=> false,
			'personal.unpublish'		=> true,
			'personal.delete'			=> true,
			'personal.delete.published'	=> true,
			'personal.html'				=> false,
			'personal.mainpage'			=> false,
			'personal.pinned'			=> false,
			'personal.catpinned'		=> false,
			'personal.favorite'			=> false,
			'personal.setviews'			=> false,
			'personal.nocat'			=> true,
			'personal.multicat'			=> true,
			'personal.customdate'		=> false,
			'personal.altname'			=> true,
			'*'							=> false,
		),
		'categories'	=> array(
			'view'						=> true,
			'modify'					=> false,
			'details'					=> false,
		),
		'ipban'	=> array(
			'view'						=> false,
			'modify'					=> false,
		),
	),
),

// Commentor
'4'	=> array(
	'#admin'	=> array(
		'news'		=> array(
			'*'							=> false,
		),

	),
),
);


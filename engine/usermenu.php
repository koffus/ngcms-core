<?php

//
// Copyright (C) 2006-2011 Next Generation CMS (http://ngcms.ru/)
// Name: usermenu.php
// Description: user's menu on the site
// Author: Vitaly Ponomarev, Alexey Zinchenko
//

// Protect against hack attempts
if (!defined('NGCMS')) die ('HAL');

$lang = LoadLang('usermenu', 'site');

// If not logged in
if (!$is_logged) {
	$tvars['vars'] = array(
		'redirect'	=>	isset($SYSTEM_FLAGS['module.usermenu']['redirect'])?$SYSTEM_FLAGS['module.usermenu']['redirect']:$_SERVER['REQUEST_URI'],
		'reg_link'		=>	generateLink('core', 'registration'),
		'lost_link'		=>	generateLink('core', 'lostpassword'),
		'form_action'	=>  generateLink('core', 'login'),
		'result'		=>	($result) ? '<div style="color : #fff; padding : 5px;">'.$lang['msge_login'].'</div>' : ''
	);
	$tvars['regx']["'\[login\](.*?)\[/login\]'si"] = '$1';
	$tvars['regx']["'\[is-logged\](.*?)\[/is-logged\]'si"] = '';
	$tvars['regx']["'\[isnt-logged\](.*?)\[/isnt-logged\]'si"] = '$1';
	$tvars['regx']["'\[login-err\](.*?)\[/login-err\]'si"] = ($SYSTEM_FLAGS['auth_fail'])?'$1':'';

} else {
	// User is logged in
	$tvars['vars'] = array(
		'profile_link'	=>	generateLink('uprofile', 'edit'),
		'addnews_link'	=>	$config['admin_url'].'/admin.php?mod=news&action=add',
		'logout_link'	=>  generateLink('core', 'logout'),
		'name'			=>	$userROW['name'],
		'phtumb_url'		=>	photos_url.'/'.(($userROW['photo'] != "")?'thumb/'.$userROW['photo']:'nophoto.gif'),
		'pm_new'		=>	'0',
		'result'		=>	($result) ? '<div style="color : #fff; padding:5px;">'.$lang['msge_login'].'</div>' : '',
		'home_url'		=>	home,
	);

	// Generate avatar link
	if ($config['use_avatars']) {
		if ($userROW['avatar']) {
			$tvars['vars']['avatar_url'] = avatars_url."/".$userROW['avatar'];
		} else {
			// If gravatar integration is active, show avatar from GRAVATAR.COM
			if ($config['avatars_gravatar']) {
				$tvars['vars']['avatar_url'] = 'http://www.gravatar.com/avatar/'.md5(strtolower($userROW['mail'])).'.jpg?s='.$config['avatar_wh'].'&d='.urlencode(avatars_url."/noavatar.gif");
			} else {
				$tvars['vars']['avatar_url'] = avatars_url."/noavatar.gif";
			}
		}
	} else {
		$tvars['vars']['avatar_url'] = '';
	}

	$tvars['regx']["'\[login\](.*?)\[/login\]'si"] = '';
	$tvars['regx']["'\[is-logged\](.*?)\[/is-logged\]'si"] = '$1';
	$tvars['regx']["'\[isnt-logged\](.*?)\[/isnt-logged\]'si"] = '';
	$tvars['regx']["'\[login-err\](.*?)\[/login-err\]'si"] = (isset($SYSTEM_FLAGS['auth_fail']) && $SYSTEM_FLAGS['auth_fail'])?'$1':'';

	$tvars['regx']["'\[if-have-perm\](.*?)\[/if-have-perm\]'si"] = ($userROW['status'] > 3)?'':'$1';
}

exec_acts('usermenu');

$tpl -> template('usermenu', tpl_site);
$tpl -> vars('usermenu', $tvars);
$template['vars']['personal_menu'] = $tpl -> show('usermenu');

// Add special variables `personal_menu:logged` and `personal_menu:not.logged`
$template['vars']['personal_menu:logged'] = $is_logged ? $template['vars']['personal_menu'] : '';
$template['vars']['personal_menu:not.logged'] = $is_logged ? '' : $template['vars']['personal_menu'];
<?php
/**
*
* @package phpBB Extension - Markeneintragung des Minipomforums
* @copyright (c) 2017 (Minipomforum.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SBL_FORUM_MENU'				=> 'Forum´s Menu',
	'SBL_CONTENT'					=> 'Inhalt',
	'SBL_MENU'						=> 'Menü',
	'SBL_SUBSCRIPTIONS'				=> 'Abonnement´s verwalten',	
	'SBL_HELP'						=> 'Hilfe',
	'SBL_LOGIN_BOX'					=> 'Login Box',
	'SBL_USER_MENU'					=> 'Benutzer Menü',

));

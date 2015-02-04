<?php
/**
 * 
 * '@Mention System [Türkçe]
 * 
 * @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'MENTIONS_EXT_NAME'						=> 'Etiket Sistemi',

	'MENTIONS_MENTION'						=> 'Etiket',
	'MENTION_BBCODE_HELPLINE'				=> 'Kullanıcı etiketlemek için: @Kullanıcıadı, [mention]Kullanıcıadı[/mention] veya [mention=&quot;Kullanıcıadı&quot;]Kullanıcı adı[/mention]',
	'MENTION_TEXT_BBCODE_HELPLINE'			=> 'Kullanıcı etiketlemek için: @Kullanıcıadı, [mention]Kullanıcıadı[/mention] veya [mention=&quot;Kullanıcıadı&quot;]Kullanıcıadı[/mention]',

	'NOTIFICATION_TYPE_MENTION'				=> 'Birisi sizi bir mesajda etiketlediğinde',
	'NOTIFICATION_MENTION'					=> array(
		1	=> '%1$s tarafından <strong>Etiketlendiniz</strong>:',
	),

	'MENTION_EXTENSION_NOT_ENABLEABLE_REASON'	=> '[mention] veya [mention=] BBCode&#39;leri zaten mevcut. Onları kaldırdıktan veya ismini değiştirdikten sonra bu eklentiyi aktif edebilirsiniz.',
));

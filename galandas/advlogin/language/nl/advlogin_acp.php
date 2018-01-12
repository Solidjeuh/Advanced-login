<?php
/**
 *
 * Advanced login. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Galandas, http://phpbb3world.altervista.org
 * Nederlandse vertaling @ Solidjeuh <http://www.muziekpromo.net> 
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
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
	'ACP_WIDTH_ADVLOGIN'			=> 'Breedte in pixels',
	'ACP_WIDTH_ADVLOGIN_EXPLAIN'	=> 'Het wordt aanbevolen om de aanbevolen vereisten voor beter kijken niet te overschrijden, ook voor mobiele apparaten Minimum 300, Maximum 350.',	
	'ACP_HEIGHT_ADVLOGIN'			=> 'Hoogte in pixels',
	'ACP_HEIGHT_ADVLOGIN_EXPLAIN'	=> 'Het wordt aanbevolen om de aanbevolen vereisten niet te overschrijden voor een betere weergave. Minimaal 150, maximaal 600',	
	'ACP_ADVLOGIN'			        => 'Geavanceerde login',
	'ACP_ADVLOGIN_SETTINGS'	        => 'Configuratie',
	'ACP_ADVLOGIN_CONFIG_SET'		=> 'Activeren of Deactiveren',
	'ACP_ADVLOGIN_CONFIG'		    => 'Tekst invoeren',	
	'ACP_ADVLOGIN_CONFIG_SAVED'		=> 'Geavanceerde login instellingen opgeslagen',
	'ACP_ADVLOGIN_VERSION'			=> 'Versie',
	'ACP_ADVLOGIN_DONATE'			=> '<a href="https://www.paypal.me/Galandas"><strong>Doneer</strong></a>',
	'ACP_ADVLOGIN_DONATE_EXPLAIN'	=> 'Als je deze extensie leuk vindt, overweeg dan om een lekkere pizza te doneren',	
	'ACP_ADVLOGIN_CREDITS'			=> 'Extensie gemaakt door <a href="http://phpbb3world.altervista.org"><strong>Galandas</strong></a>',
	'ACP_ADVLOGIN_ENABLE'			=> 'Schakel geavanceerde login in',
	'ACP_ADVLOGIN_ENABLE_EXPLAIN'	=> 'Schakel Geavanceerde login extensie globaal in, op iedere pagina',
	'ACP_ADVLOGIN_TEXT'				=> 'Toon tekst',
	'ACP_ADVLOGIN_TEXT_EXPLAIN'		=> 'Voer de tekst in die u wilt laten zien, u kunt HTML gebruiken.',
	'ACP_ADVLOGIN_COLOR'			=> 'Stelt de achtergrondkleur in',
	'ACP_ADVLOGIN_COLOR_EXPLAIN'	=> 'U kunt de achtergrondkleur wijzigen met een hex-code (bijv. A1D490). Laat dit veld leeg om de standaard kleur te gebruiken.',
	'ACP_ADVLOGIN_ASPECT'           => 'Keuze van de afbeelding AAN - UIT',
	'ACP_ADVLOGIN_ASPECT_EXPLAIN'   => 'Kies of u de afbeelding wilt weergeven. Opgelet, dit wijzigt ook de standaard achtergrond.',
    // Appearance choice	
	'ACP_ASPECT_A'           => 'Weergave 1',
	'ACP_ASPECT_B'           => 'Weergave 2',
));

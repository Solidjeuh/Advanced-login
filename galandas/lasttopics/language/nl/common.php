<?php
/**
*
* @package phpBB Extension - Advanced Active Topics
* @copyright (c) 2017 Galandas
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_LAST_TOPIC'					=> 'Geavanceerde Actieve Onderwerpen',
	'ACP_LAST_TOPIC_EXPLAIN'		    => 'Extensie Geavanceerde Actieve Onderwerpen door <a href="http://phpbb3world.altervista.org" target="_blank"><strong>Galandas</strong></a>.<br />Nederlandse vertaling door <a href="https://www.muziekpromo.net" target="_blank"><strong>Solidjeuh</strong></a>',
    'ACP_LAST_TOPIC_SETTINGS'			=> 'Inschakelen Uitschakelen',
	'ACP_LAST_TOPIC_CONF'				=> 'Configuratie',
    'ACP_LAST_TOPIC_CONFS'			    => 'Instellingen',
	'ACP_LAST_TOPIC_DONATE'			    => '<a href="https://www.paypal.me/Galandas" target="_blank"><strong>Doneer Galandas</strong></a> -_- <a href="https://www.paypal.me/solidjeuh" target="_blank"><strong>Doneer Solidjeuh.</strong></a>',
	'ACP_LAST_TOPIC_DONATE_EXPLAIN'	    => 'Indien je deze extensie leuk vind, overweeg dan een donatie voor een pizza.',
    'LAST_TOPIC_CONFIG_SAVED'         	=> 'Geavanceerde Actieve Onderwerpen opgeslagen',	
	'ALLOW_LAST_TOPIC'					=> 'Inschakelen',
	'ALLOW_LAST_TOPIC_EXPLAIN'			=> 'Schakel Geavanceerde Actieve Onderwerpen aan of uit',
	'ALLOW_LAST_TUTTO'					=> 'Inschakelen op elke pagina',
	'ALLOW_LAST_TUTTO_EXPLAIN'			=> 'Schakel Geavanceerde Actieve Onderwerpen in of uit op het volledige forum, en niet enkel op de index',
	'LAST_TOPIC_ALLERTS'                => 'Opgelet, indien je kiest voor weergave op het volledige forum moet je de weergave op de index uitschakelen. Anders worden beide weergegeven.',
    'ALLOW_LAST_INDEX'                  => 'Inschakelen op index',
    'ALLOW_LAST_INDEX_EXPLAIN'          => 'Schakel de weergave van Geavanceerde Actieve Onderwerpen in of uit',
    'LAST_TOPIC_ALLERT'                 => 'Opgelet, indien je kiest voor weergave op de index moet je de weergave het volledige forum uitschakelen. Anders worden beide weergegeven.',	
	'LAST_TOPIC_TOTAL'				    => 'Totale Onderwerpen',
	'LAST_TOPIC_TOTAL_EXPLAIN'			=> 'Voer het aantal onderwerpen in die je wenst te tonen aan de gebruikers',
	'LAST_TYPE'				            => 'Template',
	'LAST_TYPE_EXPLAIN'				    => 'Selecteer de template om weer te geven - de huidige opties zijn <strong>Forabg, Panel bg3</strong>',
	'LAST_DIRECTION'					=> 'Ticker richting',
	'LAST_DIRECTION_EXPLAIN'			=> 'Kies de richting van js - huidige opties zijn Boven of Onder',
	'LAST_UP_DIRECTION'					=> 'Boven',
	'LAST_DOWN_DIRECTION'				=> 'Onder',	
	'LAST_TITLETEXT'			        => 'Actieve onderwerpen',
    'LAST_POS'                          => 'Positie',
    'LAST_POS_EXPLAIN'                  => 'Kies de positie. Bovenaan het forum onder de navbar, zal worden weergegeven bovenaan de forum lijst.<br />Onderaan na de Statistieken, zal worden weergegeven onderaan de forum statistieken.',
    'LAST_AT_TOP'                       => 'Bovenaan onder de navbar',
	'LAST_AT_FUT'                       => 'Onderaan na de Statistieken',
	'LAST_ASPECT_A'                     => 'Panel bg3',
	'LAST_ASPECT_B'                     => 'Forabg',
    // Buttons ON OFF	
	'LAST_NAVIGATION'		        => 'Schakel knoppen in',
	'LAST_NAVIGATION_EXPLAIN'		=> 'Hier kan je kiezen om de knoppen weer te geven boven de Geavanceerde Actieve Onderwerpen',
	'PREVIOUS_SCROLL'			=> 'Terug',
	'NEXT_SCROLL'				=> 'Vooruit',
	'START_SCROLL'				=> 'Play',
	'STOP_SCROLL'				=> 'Stop',
    // Permission groups	
	'ACL_U_AT_ADV'	                => 'Kan Geavanceerde Actieve Onderwerpen bekijken',
));
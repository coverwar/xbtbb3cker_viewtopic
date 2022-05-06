<?php

/**
*
* @package xbtBB3cker
* @copyright (c) 2015 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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


	// viewtopic
	'USER_TORRENTS' => 'Torrent' , 
	'USER_COMMENTS' => 'Commenti' , 
	'USER_RATIO' => 'Rapporto' , 
	'USER_DOWNLOADS' => 'Scaricato' , 
	'USER_UPLOADS' => 'Caricato' , 
	'TORRENT_OPTION' => 'Opzioni' , 
	'TORRENT_ACTION' => '=>' , 
	'TORRENT_LASTSEED' => 'Ultima seminatrice' , 
	'TORRENT_LASTLEECH' => 'Ultima sanguisuga' , 
	'TORRENT_LAST_TIME' => 'indietro' , 
	'TORRENT_SSPEED' => 'Velocità di semina' , 
	'TORRENT_LSPEED' => 'Velocità di sanguisuga' , 

	'TORRENT_INFO_HEADER_AINTERVAL' => 'Intervallo' , 
	'TORRENT_INFO_HEADER_AMESSAGE' => 'Messaggio' , 
	'TORRENT_INFO_HEADER_BOOKMARKS' => 'Nei download futuri' , 
	'TORRENT_INFO_HEADER_ERRCOUNT' => 'Errori' , 
	'TORRENT_INFO_HEADER_NANNOUNCE' => 'Annuncia in' , 
	'TORRENT_INFO_HEADER_PEERS' => 'Peer' , 
	'TORRENT_INFO_HEADER_TRACKER' => 'Tracciatore' , 

	'TORRENT_AUTOR' => 'Autore' , 
	'TORRENT_REQRATIO' => 'Rapporto richiesto' , 
	'TORRENT_REQUPLOAD' => 'Caricamento richiesto',
	'TORRENT_STATUS_AUTHOR' => 'Cambiato',
	'TORRENT_STATUS_DT' => 'Data',
	'TORRENT_STATUS_REASON' => 'Motivo',
	'TORRENT_PRIVATE' => 'Privato',
	'TORRENT_PRIVATE_YES' => 'Si (DHT disabilitato)',
	'TORRENT_PRIVATE_NO' => 'No (DHT abilitato)',

	'TRACKER_USER_TORRENTS' => 'Torrents',
	'TRACKER_USER_SEED' => 'Seeding',
	'TRACKER_USER_LEECH' => 'Leeching',

	'TRACKER_REMSEEDS' => 'Seminatrici su tracker esterni: <b>%d</b>',
	'TRACKER_REMLEECHS' => 'Leechers su tracker esterni: <b>%d</b>',
	'TRACKER_REMCOMPLETED' => 'Downloaders su tracker esterni: <b>%d</b>',
	'IN_ANNOUNCE' => 'Annunciato ..',

	'TORRENT_NOTIFY_SUBJECT' => 'Cambia lo stato del torrent',
	'TORRENT_NOTIFY_TEXT' => "Modifica dello stato del tuo torrent: <a href='%s'>%s</a> \n\nNuovo stato: %s \nStato precedente: %s \nLo stato è stato modificato: %s \nMotivi dell cambiamento: %s \nData di modifica: %s \n\n - \nQuesto messaggio è stato creato automaticamente dal sistema di informazione sullo stato del torrent. ",

	'WAIT' => 'Attesa',
	'WO_REM_PEERS' => 'esclusi i peer esterni',

	'TORRENT_INFO_HEADER_ANNCOUNT' => 'Announces',
	'TORRENT_INFO_HEADER_ACTIVE' => 'Active',

	'FILE_SIZE' => 'Size',
	'FILE_DOWNLOADED' => 'Downloads',
	'TORRENT_INFO_ADDIT' => 'Details',
	'TORRENT_INFO_STAT' => 'Statistics',

	'TORRENT_STATUS' => 'Status',
	'SET_STATUS' => 'Change status',
	'STATUS_EXPLAIN' => 'Changed: %1$s [%2$s], reason: %3$s',
	'SET_REQUPRATIO' => 'Set the required ratio or upload for torrent downloading',
	// 'TORRENT_REQUPRATIO' => '%s%s',
	'TORRENT_REQUPLOAD_EXPLAIN' => 'To download a torrent, you need the upload value not lower than the specified',
	'TORRENT_REQRATIO_EXPLAIN' => 'To download a torrent, you need a ratio value not lower than the specified',


	'ADD_BOOKMARKS' => 'Add to future downloads',
	'TORRENT_BOOKMARKED' => 'The torrent is in your future downloads',
	'ADD_BOOKMARKS_EXPLAIN' => 'Added to future downloads: %d',
	'BOOKMARKS_TITLE_COUNT' => '(the number of users who added the torrent to future downloads is displayed in brackets)',

));

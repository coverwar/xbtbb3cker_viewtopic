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
	'USER_TORRENTS' => 'Torrents',
	'USER_COMMENTS' => 'Comments',
	'USER_RATIO' => 'Ratio',
	'USER_DOWNLOADS' => 'Downloaded',
	'USER_UPLOADS' => 'Uploaded',
	'TORRENT_OPTION' => 'Options',
	'TORRENT_ACTION' => '=>',
	'TORRENT_LASTSEED' => 'Last seeder',
	'TORRENT_LASTLEECH' => 'Last leecher',
	'TORRENT_LAST_TIME' => 'back',
	'TORRENT_SSPEED' => 'Seeding speed',
	'TORRENT_LSPEED' => 'Leeching speed',

	'TORRENT_INFO_HEADER_AINTERVAL' => 'Interval',
	'TORRENT_INFO_HEADER_AMESSAGE' => 'Message',
	'TORRENT_INFO_HEADER_BOOKMARKS' => 'In future downloads',
	'TORRENT_INFO_HEADER_ERRCOUNT' => 'Errors',
	'TORRENT_INFO_HEADER_NANNOUNCE' => 'Announce in',
	'TORRENT_INFO_HEADER_PEERS' => 'Peers',
	'TORRENT_INFO_HEADER_TRACKER' => 'Tracker',

	'TORRENT_AUTOR' => 'Author',
	'TORRENT_REQRATIO' => 'Required ratio',
	'TORRENT_REQUPLOAD' => 'Required upload',
	'TORRENT_STATUS_AUTHOR' => 'Changed',
	'TORRENT_STATUS_DT' => 'Date',
	'TORRENT_STATUS_REASON' => 'Reason',
	'TORRENT_PRIVATE' => 'Private',
	'TORRENT_PRIVATE_YES' => 'Yes (DHT disabled)',
	'TORRENT_PRIVATE_NO' => 'No (DHT enabled)',

	'TRACKER_USER_TORRENTS' => 'Torrents',
	'TRACKER_USER_SEED' => 'Seeding',
	'TRACKER_USER_LEECH' => 'Leeching',

	'TRACKER_REMSEEDS' => 'Seeders on external trackers: <b>%d</b>',
	'TRACKER_REMLEECHS' => 'Leechers on external trackers: <b>%d</b>',
	'TRACKER_REMCOMPLETED' => 'Downloaders on external trackers: <b>%d</b>',
	'IN_ANNOUNCE' => 'Announced ..',

	'TORRENT_NOTIFY_SUBJECT' => 'Change torrent status',
	'TORRENT_NOTIFY_TEXT' => "Changing the status of your torrent: <a href='%s'>%s</a> \n\nNew status: %s \nPrevious status: %s \nStatus has been changed: %s \nReasons for changing : %s \nDate of change: %s \n\n - \nThis message was created automatically by the torrent status informing system. ",

	'WAIT' => 'Wait',
	'WO_REM_PEERS' => 'excluding external peers',

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

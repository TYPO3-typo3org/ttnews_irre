<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Soren Malling <soren@sorenmalling.me>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

if (!defined ("TYPO3_MODE"))     die ("Access denied.");

$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['ttnews_irre']);

t3lib_extMgm::addLLrefForTCAdescr('tt_news','EXT:ttnews_irre/locallang_csh_tt_news.xml');

$irreFieldConfiguration = array(
	'tx_ttnewsirre_content' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:ttnews_irre/locallang_db.xml:tx_ttnewsirre_content',
		'config' => array (
			'type' => 'inline',
			'foreign_table' => 'tt_content',
			'foreign_field' => 'irre_parentid',
			'foreign_table_field' => 'irre_parenttable',
			'maxitems' => 100,
			'appearance' => array(
				'showSynchronizationLink' => 0,
				'showAllLocalizationLink' => 0,
				'showPossibleLocalizationRecords' => 0,
				'showRemovedLocalizationRecords' => 0,
				'expandSingle' => 1
			),
			'behaviour' => array(
			),
		)
	)
);


t3lib_div::loadTCA('tt_news');
t3lib_extMgm::addTCAcolumns('tt_news', $irreFieldConfiguration, 1);
t3lib_extMgm::addToAllTCAtypes('tt_news', 'tx_ttnewsirre_content;;;;1-1-1', '', 'after:short');


if((boolean) $extConf['hideContentField'] === TRUE) {
	t3lib_extMgm::addPageTSConfig('TCEFORM.tt_news.bodytext.disabled = 1');
}


?>

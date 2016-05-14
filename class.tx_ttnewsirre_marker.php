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

class tx_ttnewsirre_marker {

	function extraItemMarkerProcessor($markerArray, $row) {
		$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['ttnews_irre']);
		$cObj = t3lib_div::makeInstance('tslib_cObj');
		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
			'uid', 'tt_content',
			'irre_parentid=' . $row['uid'] .
				' AND irre_parenttable=\'tt_news\'' .
				$cObj->enableFields('tt_content'),
			'', 'sorting'
		);
		while ($rowContent = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			$rowUids[] = $rowContent['uid'];
		}
		if((int) count($rowUids) === 0 && (boolean) $extConf['renderBodytextIfZeroElements'] === TRUE) {
			$markerArray['###NEWS_CONTENT###'] = $markerArray['###NEWS_CONTENT###'];
		} elseif((int) count($rowUids) > 0) {
			$tt_content_conf = array('tables' => 'tt_content'
				,'source' => implode(',', $rowUids)
				,'dontCheckPid' => 0
			);

			$markerArray['###NEWS_CONTENT###'] = $cObj->RECORDS($tt_content_conf);
		}

		return $markerArray;
	}

}

?>

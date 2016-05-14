<?php

########################################################################
# Extension Manager/Repository config file for ext "ttnews_irre".
#
# Auto generated 18-04-2011 14:53
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'IRRE element for tt_news content',
	'description' => 'Instead of one RTE field, you are able to add tt_content element as IRRE data for your news',
	'category' => 'misc',
	'author' => 'Soren Malling',
	'author_email' => 'soren@sorenmalling.me',
	'shy' => '',
	'dependencies' => 'tt_news',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '2.0.0',
	'constraints' => array(
		'depends' => array(
			'tt_news' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:13:{s:9:"ChangeLog";s:4:"fcd3";s:10:"README.txt";s:4:"ee2d";s:30:"class.tx_ttnewsirre_marker.php";s:4:"7101";s:21:"ext_conf_template.txt";s:4:"f13b";s:12:"ext_icon.gif";s:4:"5e2a";s:17:"ext_localconf.php";s:4:"57de";s:14:"ext_tables.php";s:4:"157d";s:14:"ext_tables.sql";s:4:"d7ca";s:25:"locallang_csh_tt_news.xml";s:4:"04bb";s:16:"locallang_db.xml";s:4:"1888";s:14:"doc/manual.sxw";s:4:"52f0";s:19:"doc/wizard_form.dat";s:4:"1e76";s:20:"doc/wizard_form.html";s:4:"7354";}',
	'suggests' => array(
	),
);

?>
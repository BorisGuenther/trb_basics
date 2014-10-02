<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/*
 * BUGFIX
 * Fail to save sys_category with more than one references
 */
if(!isset($GLOBALS['TCA']['sys_category']['columns']['items']['config']['maxitems'])) {
	$GLOBALS['TCA']['sys_category']['columns']['items']['config']['maxitems']	= 998;
}

/*
 * SETUP COLUMNS
 */
$columns	= array(
		'tx_trb_basics_identifier' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:trb_basics/Resources/Private/Language/locallang_db.xlf:sys_category.column.tx_trb_basics_identifier',
			'config' => array (
				'type' => 'select',
				'default' => '-',
				'items' => array(
					array('-', '-'),
				)
			)
		),
	);


/*
 * REGISTER COLUMNS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $columns);


/*
 * SETUP PALETTE
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_category', '--div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.extended, tx_trb_basics_identifier');

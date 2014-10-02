<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * SETUP PALETTE
 */
$GLOBALS['TCA']['tt_content']['palettes']['header']['showitem']	= '
	header_layout;LLL:EXT:cms/locallang_ttc.xlf:header_layout_formlabel,
	--linebreak--,
	header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
	--linebreak--,
	subheader;LLL:EXT:cms/locallang_ttc.xlf:subheader_formlabel
';
$GLOBALS['TCA']['tt_content']['palettes']['headers']['showitem']	= $GLOBALS['TCA']['tt_content']['palettes']['header']['showitem'];

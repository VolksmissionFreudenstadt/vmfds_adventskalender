<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Adventskalender',
	'Adventskalender'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Lebendiger Adventskalender');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_vmfdsadventskalender_domain_model_window', 'EXT:vmfds_adventskalender/Resources/Private/Language/locallang_csh_tx_vmfdsadventskalender_domain_model_window.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vmfdsadventskalender_domain_model_window');
$GLOBALS['TCA']['tx_vmfdsadventskalender_domain_model_window'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window',
		'label' => 'day',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'day,type,event_id,name,address,phone,email,notes,internal_notes,image,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Window.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_vmfdsadventskalender_domain_model_window.gif'
	),
);

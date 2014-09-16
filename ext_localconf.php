<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VMFDS.' . $_EXTKEY,
	'Adventskalender',
	array(
		'Window' => 'list, show, new, create',
		
	),
	// non-cacheable actions
	array(
		'Window' => 'create',
		
	)
);

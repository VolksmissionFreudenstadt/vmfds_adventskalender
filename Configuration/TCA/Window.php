<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['tx_vmfdsadventskalender_domain_model_window'] = array(
    'ctrl' => $GLOBALS['TCA']['tx_vmfdsadventskalender_domain_model_window']['ctrl'],
    'interface' => array(
//        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, day, record_type, event_id, name, address, phone, email, notes, internal_notes, image',
    ),
    'types' => array(
        '0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, day, record_type, name, address, phone, email, notes, internal_notes, image, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, day, record_type, event_id, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
                        0)
                ),
            ),
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_vmfdsadventskalender_domain_model_window',
                'foreign_table_where' => 'AND tx_vmfdsadventskalender_domain_model_window.pid=###CURRENT_PID### AND tx_vmfdsadventskalender_domain_model_window.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'day' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.day',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'range' => array(
                    'lower' => 1,
                    'upper' => 24,
                ),
            )
        ),
        'record_type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.record_type',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('Normales Fenster', 0),
                    array('Besondere Veranstaltung', 1),
                ),
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ),
        ),
        'event_id' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.event_id',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'address' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.address',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'phone' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.phone',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'email' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.email',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'notes' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.notes',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            )
        ),
        'internal_notes' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.internal_notes',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            )
        ),
        'image' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vmfds_adventskalender/Resources/Private/Language/locallang_db.xlf:tx_vmfdsadventskalender_domain_model_window.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                    'image', array('maxitems' => 1), $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
    ),
);

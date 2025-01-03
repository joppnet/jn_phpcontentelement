<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:jn_phpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_jnphpcontentelement_domain_model_jnphpcontent',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'searchFields' => 'name,phpcontent',
        'iconfile' => 'EXT:jn_phpcontentelement/Resources/Public/Icons/Extension.png',
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, phpcontent',
    ],
    'types' => [
        '1' => ['showitem' => 'name, phpcontent, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'group',
                'allowed' => 'tx_jnphpcontentelement_domain_model_jnphpcontent',
                'size' => 1,
                'maxitems' => 1,
                'minitems' => 0,
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => '',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
            'config' => [
                'type' => 'datetime',
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
            'config' => [
                'type' => 'datetime',
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jn_phpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_jnphpcontentelement_domain_model_jnphpcontent.name',
            'config' => [
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ],
        ],
        'phpcontent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jn_phpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_jnphpcontentelement_domain_model_jnphpcontent.phpcontent',
            'config' => [
                'type' => 'text',
            	'renderType' => 't3editor',
            	'format' => 'php',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => '<?php' . PHP_EOL . PHP_EOL . '?>'
            ]
        ],
    
    ],
];

<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

/**
 * Register the PHP Content Element as a custom CType (TYPO3 v13+ style)
 * This replaces the deprecated list_type plugin registration
 */
ExtensionUtility::registerPlugin(
    'JnPhpcontentelement',
    'Phpcelist',
    'LLL:EXT:jn_phpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_jn_phpcontentelement_phpcelist.name',
    'jnphpcontentelement_phpcelist',
    'plugins',
    'LLL:EXT:jn_phpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_jn_phpcontentelement_phpcelist.description'
);

/**
 * Configure the backend form fields for the new CType
 */
$GLOBALS['TCA']['tt_content']['types']['jnphpcontentelement_phpcelist']['showitem'] = '
    --palette--;;headers,
    --palette--;;plugin,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,pages,recursive
';

/**
 * Typeicon for the content element in the backend
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jnphpcontentelement_phpcelist'] = 'jnphpcontentelement-plugin-phpcelist';
